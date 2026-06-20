<?php
namespace WlSdk\Wl\Discount\Code;

use WlSdk\WlSdkClient;

/**
 * Returns discount codes of the specified business.
 */
class DiscountCode
{
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
     * @return DiscountCodeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DiscountCodeGetRequest $request): DiscountCodeGetResponse
    {
        return new DiscountCodeGetResponse($this->client->request('/Wl/Discount/Code/DiscountCode.json', $request->params(), 'GET'));
    }
}
