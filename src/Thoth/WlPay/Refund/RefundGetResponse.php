<?php

namespace WlSdk\Thoth\WlPay\Refund;

/**
 * Response from GET
 */
class RefundGetResponse
{
    /**
     * List of payments transactions in this purchase, where each item is an array:
     * `null` in case when not initialized yet.
     *
     * @var RefundGetResponsePayTransaction|null
     */
    public ?RefundGetResponsePayTransaction $a_pay_transaction = null;

    /**
     * List or purchased items, where each item is an array:
     *
     * @var RefundGetResponsePurchaseItem|null
     */
    public ?RefundGetResponsePurchaseItem $a_purchase_item = null;

    /**
     * List of applied taxes, where each element is an array:
     *
     * @var RefundGetResponseTax|null
     */
    public ?RefundGetResponseTax $a_tax = null;

    /**
     * `true` if there are any purchase item where is possible to refund specific quantity.
     *
     * @var bool|null
     */
    public ?bool $can_change_count = null;

    /**
     * Whether transaction in a specified status can be refunded.
     *
     * @var bool|null
     */
    public ?bool $can_refund = null;

    /**
     * Whether transaction has an installment payment.
     *
     * @var bool|null
     */
    public ?bool $has_installment = null;

    /**
     * Whether transaction has a surcharge applied.
     *
     * @var bool|null
     */
    public ?bool $has_surcharge = null;

    /**
     * Payment owner name for this purchase.
     *
     * `null` if payment owner and purchase owner are the same or in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $html_pay_owner_money = null;

    /**
     * Purchase owner name.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $html_pay_owner_purchase = null;

    /**
     * Total purchase amount.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $html_purchase_total = null;

    /**
     * Total surcharge amount.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $html_surcharge_total = null;

    /**
     * Total purchase quantity.
     *
     * @var int|null
     */
    public ?int $i_quantity_total = null;

    /**
     * Whether refund is allowed for this transaction.
     *
     * @var bool|null
     */
    public ?bool $is_allowed_refund = null;

    /**
     * 'true' if enable mail `Purchase Refunded`, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_mail_refund = null;

    /**
     * Currency key of purchase.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Show action column.
     *
     * @var bool|null
     */
    public ?bool $show_action_column = null;

    /**
     * Defines whether to show table column with links to transaction details.
     *
     * @var bool|null
     */
    public ?bool $show_transaction_details = null;

    /**
     * Currency sing of purchase.
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    /**
     * Purchase comments.
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * URL to purchase edit page.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $url_purchase = null;

    public function __construct(array $data)
    {
        $this->a_pay_transaction = isset($data['a_pay_transaction']) ? new RefundGetResponsePayTransaction((array)$data['a_pay_transaction']) : null;
        $this->a_purchase_item = isset($data['a_purchase_item']) ? new RefundGetResponsePurchaseItem((array)$data['a_purchase_item']) : null;
        $this->a_tax = isset($data['a_tax']) ? new RefundGetResponseTax((array)$data['a_tax']) : null;
        $this->can_change_count = isset($data['can_change_count']) ? (bool)$data['can_change_count'] : null;
        $this->can_refund = isset($data['can_refund']) ? (bool)$data['can_refund'] : null;
        $this->has_installment = isset($data['has_installment']) ? (bool)$data['has_installment'] : null;
        $this->has_surcharge = isset($data['has_surcharge']) ? (bool)$data['has_surcharge'] : null;
        $this->html_pay_owner_money = isset($data['html_pay_owner_money']) ? (string)$data['html_pay_owner_money'] : null;
        $this->html_pay_owner_purchase = isset($data['html_pay_owner_purchase']) ? (string)$data['html_pay_owner_purchase'] : null;
        $this->html_purchase_total = isset($data['html_purchase_total']) ? (string)$data['html_purchase_total'] : null;
        $this->html_surcharge_total = isset($data['html_surcharge_total']) ? (string)$data['html_surcharge_total'] : null;
        $this->i_quantity_total = isset($data['i_quantity_total']) ? (int)$data['i_quantity_total'] : null;
        $this->is_allowed_refund = isset($data['is_allowed_refund']) ? (bool)$data['is_allowed_refund'] : null;
        $this->is_mail_refund = isset($data['is_mail_refund']) ? (bool)$data['is_mail_refund'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->show_action_column = isset($data['show_action_column']) ? (bool)$data['show_action_column'] : null;
        $this->show_transaction_details = isset($data['show_transaction_details']) ? (bool)$data['show_transaction_details'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->url_purchase = isset($data['url_purchase']) ? (string)$data['url_purchase'] : null;
    }
}
