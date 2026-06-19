<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Returns all sale items available in the business for staff, optionally filtered by location and visit.
 */
class CatalogListApi
{
    /**
     * The key of the business to get categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     * This can affect the list of displayed products.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The visit key to pay for.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all sale items available in the business for staff, optionally filtered by location and visit.
     *
     * Used in the staff app to populate the add-item picker during checkout. Returns the products and
     * services the staff member is allowed to sell at the current location. When a visit key is provided,
     * the list is filtered to items that are relevant to that visit.
     *
     * @return CatalogListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CatalogListApiGetResponse
    {
        return new CatalogListApiGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogList/CatalogList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
