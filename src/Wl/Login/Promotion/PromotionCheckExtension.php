<?php

namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Promotion/PromotionCheckExtension.json
 */
class PromotionCheckExtension
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Promotion/PromotionCheckExtension.json.
     *
     * @return PromotionCheckExtensionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionCheckExtensionGetRequest $request): PromotionCheckExtensionGetResponse
    {
        return new PromotionCheckExtensionGetResponse($this->client->request('/Wl/Login/Promotion/PromotionCheckExtension.json', $request->params(), 'GET'));
    }
}
