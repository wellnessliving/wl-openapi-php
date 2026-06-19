<?php
namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Validates the reCAPTCHA v3 token.
 */
class CaptchaScorePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
