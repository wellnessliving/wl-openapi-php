<?php

namespace WlSdk\Wl\Captcha;

use WlSdk\WlSdkClient;

/**
 * Saves the business CAPTCHA enabled setting.
 */
class BusinessCaptcha
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the business CAPTCHA enabled setting.
     *
     * @return BusinessCaptchaPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessCaptchaPutRequest $request): BusinessCaptchaPutResponse
    {
        return new BusinessCaptchaPutResponse($this->client->request('/Wl/Captcha/BusinessCaptcha.json', $request->params(), 'PUT'));
    }
}
