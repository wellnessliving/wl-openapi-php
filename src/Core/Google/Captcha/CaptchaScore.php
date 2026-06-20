<?php

namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Returns the overridden score for the reCAPTCHA v3.
 */
class CaptchaScore
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

    /**
     * Validates the reCAPTCHA v3 token.
     *
     * Accepts a reCAPTCHA v3 user token, sends it to Google for verification, and returns a response ID
     * indicating the outcome. Note that each token can only be validated once; a new token must be generated
     * for subsequent requests.
     *
     * @return CaptchaScorePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CaptchaScorePostRequest $request): CaptchaScorePostResponse
    {
        return new CaptchaScorePostResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $request->params(), 'POST'));
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
