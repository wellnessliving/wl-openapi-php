<?php

namespace WlSdk\Wl\Resource\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns list of promotions that can be used to pay for the resource.
 */
class ResourcePromotion
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of promotions that can be used to pay for the resource.
     *
     * @return ResourcePromotionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourcePromotionGetRequest $request): ResourcePromotionGetResponse
    {
        return new ResourcePromotionGetResponse($this->client->request('/Wl/Resource/Promotion/ResourcePromotion.json', $request->params(), 'GET'));
    }
}
