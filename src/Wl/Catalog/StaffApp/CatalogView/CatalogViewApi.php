<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogView;

use WlSdk\WlSdkClient;

/**
 * Calculates price information about sale item.
 */
class CatalogViewApi
{
    /**
     * Configuration information about the item, which can specify prorated amounts.
     * 
     * If set, these values will change the values returned by the endpoint call.
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * Contains information about edited taxes.
     * 
     * This will be `null` if not set yet or default taxes are used.
     * 
     * The key is the tax identifier, where the value is:
     *
     * @var array[]|null
     */
    public ?array $a_tax = null;

    /**
     * The quantity of items.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The ID of the sale category. One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * The business key.
     * This will be `null` for the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the sale item.
     * This can be retrieved with the [CatalogListApi](/Wl/Catalog/StaffApp/CatalogList/CatalogList.json) endpoint
     * (see the
     * `a_shop_product` parameter).
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The product option key.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The custom price of the sale item.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The ID of the user who performed the actions.
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
     * Calculates price information about sale item.
     *
     * Used in the staff app checkout to show the real-time price of a single line item as the staff
     * member configures it (adjusting quantity, custom price, or proration). Returns the full tax
     * breakdown so the staff member sees exactly what the client will be charged.
     *
     * @return CatalogViewApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CatalogViewApiGetResponse
    {
        return new CatalogViewApiGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogView/CatalogView.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'a_tax' => $this->a_tax,
            'i_quantity' => $this->i_quantity,
            'id_sale' => $this->id_sale,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_shop_product_option' => $this->k_shop_product_option,
            'm_price' => $this->m_price,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
