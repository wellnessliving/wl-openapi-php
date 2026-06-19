<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion list of the specified business.
 */
class PromotionListApi
{
    /**
     * Determines whether to return promotions created by Enterprise Locations (for Enterprise Cloud businesses
     * only).
     * If `true`, promotions created by Enterprise Locations are included. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * The business key used to get the promotions.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return PromotionListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PromotionListApiGetResponse
    {
        return new PromotionListApiGetResponse($this->client->request('/Wl/Promotion/PromotionList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
