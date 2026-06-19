<?php
namespace WlSdk\Core\Google;

use WlSdk\WlSdkClient;

/**
 * Saves the user CAPTCHA token for the current session.
 */
class GoogleCaptchaApi
{
    /**
     * Captcha version ID.
     *
     * @var int|null
     */
    public ?int $id_version = null;

    /**
     * The action name.
     * 
     * Used to determine the place where the CAPTCHA is needed in documentation for endpoints that used
     * the CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_action = null;

    /**
     * The user token CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the user CAPTCHA token for the current session.
     *
     * Accepts the CAPTCHA version, the action name, and the user token obtained from the Google reCAPTCHA widget,
     * and stores them in the session so that subsequent API requests requiring CAPTCHA verification can use them.
     *
     * @deprecated
     *
     * @return GoogleCaptchaApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): GoogleCaptchaApiPutResponse
    {
        return new GoogleCaptchaApiPutResponse($this->client->request('/Core/Google/GoogleCaptcha.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_version' => $this->id_version,
            'text_action' => $this->text_action,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
