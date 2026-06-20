<?php
namespace WlSdk\Core\Google\Captcha;

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
     * @return GoogleCaptchaPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(GoogleCaptchaPutRequest $request): GoogleCaptchaPutResponse
    {
        return new GoogleCaptchaPutResponse($this->client->request('/Core/Google/Captcha/GoogleCaptcha.json', $request->params(), 'PUT'));
    }
}
