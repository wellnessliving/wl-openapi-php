<?php
namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePurchaseItem
{
    /**
     * The purchase item logo.
     *
     * @var PurchaseReceiptGetResponsePurchaseItemLogo|null
     */
    public ?PurchaseReceiptGetResponsePurchaseItemLogo $a_logo = null;

    /**
     * List of visit keys. Only available if the purchase item is a class period,
     * enrollment, enrollment deposit, or enrollment discount. Each element is a string visit key.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * The number of items in the purchase.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Program ID. One of {@link \WlSdk\RsProgramSid} constants. Only applies to promotions. `null` if the purchase
     * item is not a promotion.
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * Purchase item ID. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * Sale ID. One of {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * The identifier of the item.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the purchase item.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Product key.
     * Set only if `id_purchase_item`is {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /**
     * The price of the single item.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The price of all items.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * The type of the item (for example, a pass or membership).
     *
     * @var string|null
     */
    public ?string $text_category = null;

    /**
     * The currency of the price.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    /**
     * Additional information about the purchase item.
     *
     * @var string|null
     */
    public ?string $text_info = null;

    /**
     * The name of the purchase item.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The description of the purchase item.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * The URL to print. Only available if the purchase item is a coupon (gift card).
     *
     * @var string|null
     */
    public ?string $url_print = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new PurchaseReceiptGetResponsePurchaseItemLogo((array)$data['a_logo']) : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->k_shop_product = isset($data['k_shop_product']) ? (string)$data['k_shop_product'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->text_category = isset($data['text_category']) ? (string)$data['text_category'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
        $this->text_info = isset($data['text_info']) ? (string)$data['text_info'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
    }
}
