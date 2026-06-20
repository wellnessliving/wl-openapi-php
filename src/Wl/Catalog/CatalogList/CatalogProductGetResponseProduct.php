<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class CatalogProductGetResponseProduct
{
    /**
     * HTML-escaped formatted price of the product.
     *
     * @var string|null
     */
    public ?string $html_price = null;

    /**
     * HTML-escaped formatted early-bird price of the product. Present only when an early price applies.
     *
     * @var string|null
     */
    public ?string $html_price_early = null;

    /**
     * The sale category ID. One of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * The product key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The shop category key.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The product title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Direct link to the catalog view page for this product.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    public function __construct(array $data)
    {
        $this->html_price = isset($data['html_price']) ? (string)$data['html_price'] : null;
        $this->html_price_early = isset($data['html_price_early']) ? (string)$data['html_price_early'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
    }
}
