<?php
namespace WlSdk\Wl\Discount\Code;

use WlSdk\WlSdkClient;

/**
 * Returns discount codes of the specified business.
 */
class DiscountCodeApi
{
    /**
     * Business key of the discount codes.
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
     * Returns discount codes of the specified business.
     *
     * Used in the backend discount management UI to show the full list of discount codes for a business
     * so the staff member can select one to view or edit.
     *
     * @return DiscountCodeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): DiscountCodeApiGetResponse
    {
        return new DiscountCodeApiGetResponse($this->client->request('/Wl/Discount/Code/DiscountCode.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
