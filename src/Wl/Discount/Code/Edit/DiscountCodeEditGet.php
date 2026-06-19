<?php
namespace WlSdk\Wl\Discount\Code\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets information about discount.
 */
class DiscountCodeEditGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about discount.
     *
     * Used to load the discount code editor form. Returns the full configuration of an existing discount
     * code so the staff member can review or modify it: value, date range, usage limit, which items it
     * applies to, client type restrictions, and whether it is currently active.
     *
     * @return DiscountCodeEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DiscountCodeEditGetRequest $request): DiscountCodeEditGetResponse
    {
        return new DiscountCodeEditGetResponse($this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $request->params(), 'GET'));
    }
}
