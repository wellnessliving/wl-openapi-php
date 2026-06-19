<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Sends to user "password recovery" mail.
 */
class ChangePasswordBeginApi
{
    /**
     * The characters to pass captcha test.
     * 
     * Specify this only if server requires captcha.
     *
     * @var string|null
     */
    public ?string $text_captcha = null;

    /**
     * The user's email. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The URL for the password reset page. This link will be used in a password reset email.
     * 
     * Specify this only if you want to send the user to a custom password reset page.
     * If empty, the default URL page will be used.
     *
     * @var string|null
     */
    public ?string $url_reset = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends to user "password recovery" mail.
     *
     * Accepts the user's email address and an optional custom reset-page URL, validates the input,
     * optionally checks a CAPTCHA, and sends a password reset email containing a link the user can follow
     * to set a new password using
     * [ChangePasswordApplyApi](/Core/Passport/ChangePassword/ChangePasswordApply.json).
     *
     * @return ChangePasswordBeginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ChangePasswordBeginApiPostResponse
    {
        return new ChangePasswordBeginApiPostResponse($this->client->request('/Core/Passport/ChangePassword/ChangePasswordBegin.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_captcha' => $this->text_captcha,
            'text_mail' => $this->text_mail,
            'url_reset' => $this->url_reset,
            ],
            static fn($v) => $v !== null
        );
    }
}
