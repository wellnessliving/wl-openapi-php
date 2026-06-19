<?php
namespace WlSdk\Wl\Login\Coupon;

use WlSdk\WlSdkClient;

/**
 * Retrieves the key and balance of a gift card by its code for the specified business.
 */
class CouponApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The gift card.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the key and balance of a gift card by its code for the specified business.
     *
     * Validates the gift card code against the specified business, enforces a per-IP rate limit, and checks that
     * the
     * card is active, not already redeemed, not expired, and in the correct currency before returning its key and
     * remaining balance.
     *
     * @return CouponApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CouponApiGetResponse
    {
        return new CouponApiGetResponse($this->client->request('/Wl/Login/Coupon/Coupon.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
