<?php
namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Returns the overridden score for the reCAPTCHA v3.
 */
class CaptchaScoreApi
{
    /**
     * The user token CAPTCHA from
     * [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) captcha.
     * 
     * Be careful when use this endpoint for validate token, because token can be used only once,
     * so if you validate token in this endpoint, you must generate new token for next requests.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /**
     * Overridden score value for V3 captcha.
     * 
     * `null` to reset override.
     *
     * @var float|null
     */
    public ?float $f_score = null;

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
     * @return CaptchaScoreApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CaptchaScoreApiGetResponse
    {
        return new CaptchaScoreApiGetResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'GET'));
    }

    /**
     * Validates the reCAPTCHA v3 token.
     *
     * Accepts a reCAPTCHA v3 user token, sends it to Google for verification, and returns a response ID
     * indicating the outcome. Note that each token can only be validated once; a new token must be generated
     * for subsequent requests.
     *
     * @return CaptchaScoreApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): CaptchaScoreApiPostResponse
    {
        return new CaptchaScoreApiPostResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'POST'));
    }

    /**
     * Overrides the score for the reCAPTCHA v3.
     *
     * Sets a custom score value in the range 0.0-1.0 to override the actual reCAPTCHA v3 score for the
     * current session. Pass `null` to clear the override and restore the default behavior. Requires the
     * score override feature to be enabled.
     *
     * @return CaptchaScoreApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): CaptchaScoreApiPutResponse
    {
        return new CaptchaScoreApiPutResponse($this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_token' => $this->text_token,
            'f_score' => $this->f_score,
            ],
            static fn($v) => $v !== null
        );
    }
}
