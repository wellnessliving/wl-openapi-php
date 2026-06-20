<?php
namespace WlSdk\Wl\Promotion\Index;

use WlSdk\WlSdkClient;

/**
 * Gets a list of packages/passes/memberships.
 */
class PromotionIndex
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of packages/passes/memberships.
     *
     * Returns introductory promotion offers available at the specified location, optionally filtered by program
     * type,
     * including pricing, duration, visit limits, and access information for each item.
     *
     * @return PromotionIndexGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionIndexGetRequest $request): PromotionIndexGetResponse
    {
        return new PromotionIndexGetResponse($this->client->request('/Wl/Promotion/Index/PromotionIndex.json', $request->params(), 'GET'));
    }
}
