<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetRequest
{
    /**
     * Information about the discount code:
     *
     * @var array|null
     */
    public ?array $a_discount_code = null;

    /**
     * The list of items grouped by sale categories on the store page.
     * Keys refer to sale IDs from {@link \WlSdk\RsSaleSid}, and values refer to data to identify an item:
     *
     * @var array[]|null
     */
    public ?array $a_sale_id_group = null;

    /**
     * The client prorate date.
     *
     * This will be `null` in cases where the client prorate date hasn't passed.
     *
     * @var string|null
     */
    public ?string $dl_client_prorate = null;

    /**
     * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
     * The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
     * The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The promotion image height in pixels. Specify this value if you need the image to be returned in a specific
     * size.
     * The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_promotion_image_height = null;

    /**
     * The promotion image width in pixels. Specify this value if you need the image to be returned in a specific
     * size.
     * The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_promotion_image_width = null;

    /**
     * The ID of item category.
     * One of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * Determines whether the API is called in the backend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The item key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The product option key.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * A list of goods to get information for. Every element must contain the next keys:
     *
     * Note that this must be serialized via JSON.
     *
     * If this field is specified, don't specify any of the following fields:
     * * [ElementApi::$id_sale](/Wl/Catalog/CatalogList/Element.json)
     * * [ElementApi::$k_id](/Wl/Catalog/CatalogList/Element.json)
     * * [ElementApi::$k_shop_product_option](/Wl/Catalog/CatalogList/Element.json)
     *
     * This will be `null` to get information for only one item.
     *
     * @var string|null
     */
    public ?string $text_item = null;

    /**
     * The UID of a customer (user) for whom the purchase is made. This is used in the backend to calculate
     * discounts.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_discount_code' => $this->a_discount_code,
            'a_sale_id_group' => $this->a_sale_id_group,
            'dl_client_prorate' => $this->dl_client_prorate,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'i_promotion_image_height' => $this->i_promotion_image_height,
            'i_promotion_image_width' => $this->i_promotion_image_width,
            'id_sale' => $this->id_sale,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_shop_product_option' => $this->k_shop_product_option,
            'text_item' => $this->text_item,
            'uid_customer' => $this->uid_customer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
