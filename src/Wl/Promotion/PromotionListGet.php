<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion list of the specified business.
 */
class PromotionListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns promotion list of the specified business.
     *
     * Returns all active promotions for the given business, with optional inclusion of Enterprise Location
     * promotions
     * when the business is a franchisor and `is_franchise` is set to `true`.
     *
     * @return PromotionListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionListGetRequest $request): PromotionListGetResponse
    {
        return new PromotionListGetResponse($this->client->request('/Wl/Promotion/PromotionList.json', $request->params(), 'GET'));
    }
}
