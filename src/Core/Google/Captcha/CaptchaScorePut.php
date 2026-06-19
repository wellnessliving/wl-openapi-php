<?php
namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Overrides the score for the reCAPTCHA v3.
 */
class CaptchaScorePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Overrides the score for the reCAPTCHA v3.
     *
     * Sets a custom score value in the range 0.0-1.0 to override the actual reCAPTCHA v3 score for the
     * current session. Pass `null` to clear the override and restore the default behavior. Requires the
     * score override feature to be enabled.
     *
     * @return CaptchaScorePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CaptchaScorePutRequest $request): CaptchaScorePutResponse
    {
        return new CaptchaScorePutResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $request->params(), 'PUT'));
    }
}
