<?php

namespace WlSdk\Core\Google;

use WlSdk\WlSdkClient;

/**
 * Saves the user CAPTCHA token for the current session.
 */
class GoogleCaptcha
{
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
     * Site keys for initialize Google reCAPTCHA:
     * * Version 2 (invisible):
     *   * Demo/Staging - `6Ldqwe0gAAAAANve1TEPFb_Yxgb9wsoIfrNL6-2Z`
     *   * Production - `6LeOGp4hAAAAACDoQeLUxnu2TAXXZWhdSm118auy`
     * * Version 3:
     *   * Demo/Staging - `6Lc7bukqAAAAAHzXhG6WytHsGbz6rYYyklg_0kMb`
     *   * Production - `6LcGn18rAAAAAPJNY1pGuoaTCM1MOBxz5HgE_4Vy`
     *
     * @deprecated Use {@link \Core\Google\Captcha\GoogleCaptchaApi} instead of this.
     *
     * @return GoogleCaptchaPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(GoogleCaptchaPutRequest $request): GoogleCaptchaPutResponse
    {
        return new GoogleCaptchaPutResponse($this->client->request('/Core/Google/GoogleCaptcha.json', $request->params(), 'PUT'));
    }
}
