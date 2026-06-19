<?php
namespace WlSdk\Wl\Profile\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of user's purchase items to show in user profile.
 */
class PurchaseListApi
{
    /**
     * The key of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @deprecated
     *
     * @return PurchaseListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PurchaseListApiGetResponse
    {
        return new PurchaseListApiGetResponse($this->client->request('/Wl/Profile/Purchase/PurchaseList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
