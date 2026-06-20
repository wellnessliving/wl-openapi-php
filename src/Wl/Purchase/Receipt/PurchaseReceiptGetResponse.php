<?php
namespace WlSdk\Wl\Purchase\Receipt;

/**
 * Response from GET
 */
class PurchaseReceiptGetResponse
{
    /**
     * Information about the account balance for a user's account after payment for the purchase. Every element has
     * the following keys:
     *
     * @var PurchaseReceiptGetResponseAccountRest|null
     */
    public ?PurchaseReceiptGetResponseAccountRest $a_account_rest = null;

    /**
     * Information about the business.
     *
     * @var PurchaseReceiptGetResponseBusiness|null
     */
    public ?PurchaseReceiptGetResponseBusiness $a_business = null;

    /**
     * Payment transaction information. Every element has the following keys:
     *
     * @var PurchaseReceiptGetResponseCard|null
     */
    public ?PurchaseReceiptGetResponseCard $a_card = null;

    /**
     * Information about the customer.
     *
     * @var PurchaseReceiptGetResponseCustomer|null
     */
    public ?PurchaseReceiptGetResponseCustomer $a_customer = null;

    /**
     * A list of payment methods for the current purchase. Every element has the following keys:
     *
     * @var PurchaseReceiptGetResponsePayMethod|null
     */
    public ?PurchaseReceiptGetResponsePayMethod $a_pay_method = null;

    /**
     * Complete information about price information for the purchase.
     *
     * @var PurchaseReceiptGetResponsePrice|null
     */
    public ?PurchaseReceiptGetResponsePrice $a_price = null;

    /**
     * A list of purchase items. Every element has the following keys:
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
        $this->a_account_rest = isset($data['a_account_rest']) ? new PurchaseReceiptGetResponseAccountRest((array)$data['a_account_rest']) : null;
        $this->a_business = isset($data['a_business']) ? new PurchaseReceiptGetResponseBusiness((array)$data['a_business']) : null;
        $this->a_card = isset($data['a_card']) ? new PurchaseReceiptGetResponseCard((array)$data['a_card']) : null;
        $this->a_customer = isset($data['a_customer']) ? new PurchaseReceiptGetResponseCustomer((array)$data['a_customer']) : null;
        $this->a_pay_method = isset($data['a_pay_method']) ? new PurchaseReceiptGetResponsePayMethod((array)$data['a_pay_method']) : null;
        $this->a_price = isset($data['a_price']) ? new PurchaseReceiptGetResponsePrice((array)$data['a_price']) : null;
        $this->a_purchase_item = isset($data['a_purchase_item']) ? array_map(static fn($item) => new PurchaseReceiptGetResponsePurchaseItem((array)$item), (array)$data['a_purchase_item']) : null;
        $this->dtl_purchase = isset($data['dtl_purchase']) ? (string)$data['dtl_purchase'] : null;
        $this->has_signature = isset($data['has_signature']) ? (bool)$data['has_signature'] : null;
        $this->html_receipt = isset($data['html_receipt']) ? (string)$data['html_receipt'] : null;
        $this->text_purchase_id = isset($data['text_purchase_id']) ? (string)$data['text_purchase_id'] : null;
        $this->text_receipt = isset($data['text_receipt']) ? (string)$data['text_receipt'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
        $this->url_print_receipt = isset($data['url_print_receipt']) ? (string)$data['url_print_receipt'] : null;
    }
}
