<?php
namespace WlSdk\Core\Captcha;

use WlSdk\WlSdkClient;

/**
 * Checks if a CAPTCHA is required for the given captcha type.
 */
class CaptchaRequire
{
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
     * @return CaptchaRequireGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CaptchaRequireGetRequest $request): CaptchaRequireGetResponse
    {
        return new CaptchaRequireGetResponse($this->client->request('/Core/Captcha/CaptchaRequire.json', $request->params(), 'GET'));
    }
}
