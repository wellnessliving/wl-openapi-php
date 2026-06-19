<?php
namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Returns the overridden score for the reCAPTCHA v3.
 */
class CaptchaScoreGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the overridden score for the reCAPTCHA v3.
     *
     * Returns the current session-level score override value that was set via the PUT method.
     * Requires reCAPTCHA v3 to be enabled; throws an exception otherwise.
     *
     * @return CaptchaScoreGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CaptchaScoreGetRequest $request): CaptchaScoreGetResponse
    {
        return new CaptchaScoreGetResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $request->params(), 'GET'));
    }
}
