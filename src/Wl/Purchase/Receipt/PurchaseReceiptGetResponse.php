<?php

namespace WlSdk\Wl\Purchase\Receipt;

/**
 * Response from GET
 */
class PurchaseReceiptGetResponse
{
    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponseAccountRest[]|null
     */
    public ?array $a_account_rest = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponseBusiness[]|null
     */
    public ?array $a_business = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponseCard[]|null
     */
    public ?array $a_card = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponseCustomer[]|null
     */
    public ?array $a_customer = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponsePayMethod[]|null
     */
    public ?array $a_pay_method = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponsePrice[]|null
     */
    public ?array $a_price = null;

    /**
     * No description.
     *
     * @var PurchaseReceiptGetResponsePurchaseItem[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * The local date of the purchase in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_purchase = null;

    /**
     * Determines whether the payment contained a signature.
     *
     * @var bool|null
     */
    public ?bool $has_signature = null;

    /**
     * HTML representation of the purchase receipt.
     *
     * @var string|null
     */
    public ?string $html_receipt = null;

    /**
     * The normalized purchase ID.
     *
     * @var string|null
     */
    public ?string $text_purchase_id = null;

    /**
     * The receipt text set in the store settings.
     *
     * @var string|null
     */
    public ?string $text_receipt = null;

    /**
     * The URL for printing on a normal printer.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    /**
     * The URL for printing on a receipt printer.
     *
     * @var string|null
     */
    public ?string $url_print_receipt = null;

    public function __construct(array $data)
    {
        $this->a_account_rest = isset($data['a_account_rest']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponseAccountRest((array)$item), (array)$data['a_account_rest']) : null;
        $this->a_business = isset($data['a_business']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponseBusiness((array)$item), (array)$data['a_business']) : null;
        $this->a_card = isset($data['a_card']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponseCard((array)$item), (array)$data['a_card']) : null;
        $this->a_customer = isset($data['a_customer']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponseCustomer((array)$item), (array)$data['a_customer']) : null;
        $this->a_pay_method = isset($data['a_pay_method']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponsePayMethod((array)$item), (array)$data['a_pay_method']) : null;
        $this->a_price = isset($data['a_price']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponsePrice((array)$item), (array)$data['a_price']) : null;
        $this->a_purchase_item = isset($data['a_purchase_item']) ? array_map(static fn ($item) => new PurchaseReceiptGetResponsePurchaseItem((array)$item), (array)$data['a_purchase_item']) : null;
        $this->dtl_purchase = isset($data['dtl_purchase']) ? (string)$data['dtl_purchase'] : null;
        $this->has_signature = isset($data['has_signature']) ? (bool)$data['has_signature'] : null;
        $this->html_receipt = isset($data['html_receipt']) ? (string)$data['html_receipt'] : null;
        $this->text_purchase_id = isset($data['text_purchase_id']) ? (string)$data['text_purchase_id'] : null;
        $this->text_receipt = isset($data['text_receipt']) ? (string)$data['text_receipt'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
        $this->url_print_receipt = isset($data['url_print_receipt']) ? (string)$data['url_print_receipt'] : null;
    }
}
