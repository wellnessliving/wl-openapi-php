<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ListGetResponseProductDuplicate
{
    /**
     * The list of location keys where the sale item is available.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Shop category keys the item belongs to.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * UTC creation date of the item in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * The item price.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * `true` if the item should be hidden from the application, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * The sale category ID. One of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * `true` if the item was accessed via a direct purchase link, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_direct = null;

    /**
     * `true` if the item is an introductory offer, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_introductory = null;

    /**
     * The item key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The primary shop category key for this item entry.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The unique string key identifying the item (product key combined with its DB SID).
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * The item title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Direct URL to the catalog view page for this item.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_direct = isset($data['is_direct']) ? (bool)$data['is_direct'] : null;
        $this->is_introductory = isset($data['is_introductory']) ? (bool)$data['is_introductory'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
    }
}
