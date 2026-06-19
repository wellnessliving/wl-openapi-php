<?php
namespace WlSdk\Core\Captcha;

use WlSdk\WlSdkClient;

/**
 * Checks if a CAPTCHA is required for the given captcha type.
 */
class CaptchaRequireApi
{
    /**
     * Arguments for creating CAPTCHA object.
     *
     * @var array[]|null
     */
    public ?array $a_arguments = null;

    /**
     * The CID of the CAPTCHA.
     *
     * @var int|null
     */
    public ?int $cid_captcha = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if a CAPTCHA is required for the given captcha type.
     *
     * Used before rendering a form that may include a CAPTCHA widget. The caller supplies the captcha type
     * (identified by CID) and any constructor arguments it needs; the response tells the frontend whether to
     * show the challenge at all and which reCAPTCHA version is active.
     *
     * @return CaptchaRequireApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CaptchaRequireApiGetResponse
    {
        return new CaptchaRequireApiGetResponse($this->client->request('/Core/Captcha/CaptchaRequire.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_arguments' => $this->a_arguments,
            'cid_captcha' => $this->cid_captcha,
            ],
            static fn($v) => $v !== null
        );
    }
}
