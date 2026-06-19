<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Saves promotion data.
 */
class PromotionPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
