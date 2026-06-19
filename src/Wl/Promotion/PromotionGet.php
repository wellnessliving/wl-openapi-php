<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion by the specified business and promotion keys.
 */
class PromotionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns promotion by the specified business and promotion keys.
     *
     * Returns full promotion details including access restrictions, image, pricing, duration, tags,
     * locations, and guest pass settings if applicable.
     *
     * @return PromotionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionGetRequest $request): PromotionGetResponse
    {
        return new PromotionGetResponse($this->client->request('/Wl/Promotion/Promotion.json', $request->params(), 'GET'));
    }
}
