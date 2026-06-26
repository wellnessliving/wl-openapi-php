<?php

namespace WlSdk\Wl\Login\Promotion\Share;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Promotion/Share/LoginPromotionShare.json
 */
class LoginPromotionShare
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Promotion/Share/LoginPromotionShare.json.
     *
     * @return LoginPromotionShareGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginPromotionShareGetRequest $request): LoginPromotionShareGetResponse
    {
        return new LoginPromotionShareGetResponse($this->client->request('/Wl/Login/Promotion/Share/LoginPromotionShare.json', $request->params(), 'GET'));
    }
}
