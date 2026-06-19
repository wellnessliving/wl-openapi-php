<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about current sale item.
 */
class ElementApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * Information about the discount code:
     *
     * @var array[]|null
     */
    public ?array $a_discount_code = null;

    /**
     * The list of items grouped by sale categories on the store page.
Keys refer to sale IDs from [RsSaleSid](#/components/schemas/RsSaleSid), and values refer to data to identify an item:
     *
     * @var array[]|null
     */
    public ?array $a_sale_id_group = null;

    /**
     * The client prorate date.

This will be `null` in cases where the client prorate date hasn't passed.
     *
     * @var string|null
     */
    public ?string $dl_client_prorate = null;

    /**
     * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The promotion image height in pixels. Specify this value if you need the image to be returned in a specific size.
The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_promotion_image_height = null;

    /**
     * The promotion image width in pixels. Specify this value if you need the image to be returned in a specific size.
The returned image will have default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_promotion_image_width = null;

    /**
     * The ID of item category.
One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *
     * @var int|null
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

This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * A list of goods to get information for. Every element must contain the next keys:

Note that this must be serialized via JSON.

If this field is specified, don't specify any of the following fields:
* `id_sale`
* `k_id`
* `k_shop_product_option`

This will be `null` to get information for only one item.
     *
     * @var string|null
     */
    public ?string $text_item = null;

    /**
     * The UID of a customer (user) for whom the purchase is made. This is used in the backend to calculate discounts.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves an information about current sale item.
     *
     * Used to render the detail view of a single store item (promotion, product, event, or coupon) in the
     * client-facing catalog. Returns everything needed to display the item: price, taxes, images,
     * description, booking restrictions, and available purchase options.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_age_restriction: No description.
     *   - array[] a_data: No description.
     *   - array[] a_image: No description.
     *   - array[] a_image_list: No description.
     *   - array[] a_installment_template: No description.
     *   - array[] a_item: No description.
     *   - array[] a_tax: No description.
     *   - string f_price: The price of the sale item.
     *   - string f_price_include: The price of the sale item, including tax.
     *   - string f_price_retail_product: The retail price of the product. This will be empty if this isn't a product.
     *   - string f_price_total_enrollment: Full price of event. This will be empty if this isn't an event.
     *   - string f_tax: The tax amount.
     *   - string html_description: The sale item description.
     *   - string html_special: Special instructions for the sale item.
     *   - int id_purchase_item: The purchase item category ID.
One of the [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid) constants.
     *   - int id_purchase_option_view: The ID of the item view category. One of the [PurchaseOptionViewSid](#/components/schemas/Wl.Catalog.PurchaseOptionViewSid) constants.
     *   - int id_sale: The ID of item category.
One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *   - bool is_contract: If `true`, the item requires a contract. Otherwise, this will be `false`.
     *   - string k_id: The item key.
     *   - string k_shop_product_option: The product option key.

This will be `null` if not set yet.
     *   - string m_discount_code: The discount amount for a discount code.
     *   - string m_discount_login: The discount amount for a user's type.
     *   - string m_price: The price on the price tag.
     *   - string m_price_include: The price, including taxes.
     *   - string m_tax: The tax amount.
     *   - string s_comment: Additional comment(s).
For example, information about 'introductory offer'.
     *   - string s_price: The price of the sale item in a human-readable format.
     *   - string s_sale: The category title of the sale item.
     *   - string s_title: The sale item title.
     *   - string text_price: The price on the price tag, with the currency sign.
     *   - string text_sale: The title of the item category.
     *   - string text_title: The item title.
     *   - string xml_description: A detailed description.
     *   - string xml_special: Special instructions.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/CatalogList/Element.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
            static fn($v) => $v !== null
        );
    }
}
