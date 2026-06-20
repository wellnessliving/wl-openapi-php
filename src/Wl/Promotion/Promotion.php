<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion by the specified business and promotion keys.
 */
class Promotion
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

    /**
     * Saves promotion data.
     *
     * Accepts the full promotion configuration including title, description, access rules, duration, tags, and
     * guest
     * pass settings, then validates and persists the changes.
     *
     * @return PromotionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromotionPostRequest $request): PromotionPostResponse
    {
        return new PromotionPostResponse($this->client->request('/Wl/Promotion/Promotion.json', $request->params(), 'POST'));
    }

    /**
     * Soft-deletes the specified promotion if it has no associated sales.
     *
     * Validates staff privileges and checks that the promotion has not been sold before marking it as removed.
     *
     * @return PromotionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PromotionDeleteRequest $request): PromotionDeleteResponse
    {
        return new PromotionDeleteResponse($this->client->request('/Wl/Promotion/Promotion.json', $request->params(), 'DELETE'));
    }
}
