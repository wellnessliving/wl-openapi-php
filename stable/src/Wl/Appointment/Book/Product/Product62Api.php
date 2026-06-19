<?php
namespace WlSdk\Wl\Appointment\Book\Product;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of available service add-ons.
 */
class Product62Api
{
    /**
     * The key of a location where appointment is going to be booked.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of a service to show information for.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The key of a user to show information for.
     * 
     * Products with a [PurchaseRestrictionSid::TYPE](#/components/schemas/Wl.Shop.Product.PurchaseRestrictionSid)
     * restriction will be filtered out.
     * Only those products that match the client type or those that have no restrictions will be shown.
     * 
     * `null` if the client is not logged in.
     * 
     * If you don't need to filter products by client type/group, use
     * [ProductApi](/Wl/Appointment/Book/Product/Product.json).
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
     * Retrieves list of available service add-ons.
     *
     * Returns active add-on products for the specified service and location, filtered by the given
     *  client's login type when a UID is provided. Products with a purchase restriction that does not
     *  match the client type are excluded from the result.
     *
     * @return Product62ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): Product62ApiGetResponse
    {
        return new Product62ApiGetResponse($this->client->request('/Wl/Appointment/Book/Product/Product62.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
