<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion by the specified business and promotion keys.
 */
class PromotionApi
{
    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the
     * promotion.
     *
     * @var array|mixed|null
     */
    public $o_guest_settings = null;

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
     * @return PromotionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PromotionApiGetResponse
    {
        return new PromotionApiGetResponse($this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'GET'));
    }

    /**
     * Saves promotion data.
     *
     * Accepts the full promotion configuration including title, description, access rules, duration, tags, and
     * guest
     * pass settings, then validates and persists the changes.
     *
     * @return PromotionApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PromotionApiPostResponse
    {
        return new PromotionApiPostResponse($this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'POST'));
    }

    /**
     * Soft-deletes the specified promotion if it has no associated sales.
     *
     * Validates staff privileges and checks that the promotion has not been sold before marking it as removed.
     *
     * @return PromotionApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): PromotionApiDeleteResponse
    {
        return new PromotionApiDeleteResponse($this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            'a_promotion' => $this->a_promotion,
            'o_guest_settings' => $this->o_guest_settings,
            ],
            static fn($v) => $v !== null
        );
    }
}
