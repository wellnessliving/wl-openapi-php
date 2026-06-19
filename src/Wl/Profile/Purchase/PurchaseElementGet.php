<?php
namespace WlSdk\Wl\Profile\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about 1 purchase item.
 *
 * @deprecated
 */
class PurchaseElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about 1 purchase item.
     *
     * Loads the full details of a single purchase item for display on the client profile, including
     *  pricing, discounts, taxes, refunds, and current status. The item can be identified by
     *  purchase item key, redemption code, or login promotion key.
     *
     * @return PurchaseElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseElementGetRequest $request): PurchaseElementGetResponse
    {
        return new PurchaseElementGetResponse($this->client->request('/Wl/Profile/Purchase/PurchaseElement.json', $request->params(), 'GET'));
    }
}
