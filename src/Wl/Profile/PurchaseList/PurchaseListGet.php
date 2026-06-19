<?php
namespace WlSdk\Wl\Profile\PurchaseList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of user's purchase items to show in user profile.
 */
class PurchaseListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of user's purchase items to show in user profile.
     *
     * Returns the complete purchase history for the client in the given business, covering all
     *  item types such as memberships, redemption codes, enrollments, products, appointments, and
     *  gift cards. Package components are resolved and included inline beside their parent item.
     *
     * @return PurchaseListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseListGetRequest $request): PurchaseListGetResponse
    {
        return new PurchaseListGetResponse($this->client->request('/Wl/Profile/PurchaseList/PurchaseList.json', $request->params(), 'GET'));
    }
}
