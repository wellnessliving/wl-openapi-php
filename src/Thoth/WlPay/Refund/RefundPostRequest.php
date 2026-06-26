<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundPostRequest
{
    /**
     * `true` if need to refund a free purchase without any transactions, `false` if purchase has transactions.
     *
     * If it is a free purchase without any transaction, then we will not proceed the money refunds.
     * For example, it may be used to return the inventory that was obtained through the free purchases.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * 'true' if need send `Purchase Refunded` mail, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_mail_refund_send = null;

    /**
     * `true` if transaction should be voided, `false` if transaction should be refunded.
     *
     * @var bool|null
     */
    public ?bool $is_void = null;

    /**
     * Business where to process purchase refund.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchase key.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Key is the transaction key. Primary key from RsPayTransactionProcessSql table.
     * Value is one of the {@link \WlSdk\RsPayRefundMethodSid} constant.
     *
     * See PayRefund::save() for documentation.
     * `null` in case when not initialized yet.
     *
     * @var int[]|null
     */
    public ?array $a_pay_refund_method = null;

    /**
     * Key is the transaction key. Primary key from RsPayTransactionProcessSql table.
     * Value is an amount to refund.
     *
     * See PayRefund::save() for documentation.
     * `null` in case when not initialized yet.
     *
     * @var array|null
     */
    public ?array $a_refund = null;

    /**
     * Purchase items data to refund.
     * Key is the purchase item key. Primary key from RsPurchaseItemSql table.
     * Note!
     *   Key "0" corresponds to the refund of the tips.
     *   Key "-1" corresponds to the refund of the surcharges.
     *   Key "-2" corresponds to the refund of the penalty fee.
     *   Key "-3" corresponds to the refund of the credit card surcharges.
     *   Key "-4" corresponds to the refund of the ach surcharges.
     * Value of each element has next structure:
     *
     * See PayRefund::save() for documentation.
     * `null` in case when not initialized yet.
     *
     * @var array|null
     */
    public ?array $a_refund_item = null;

    /**
     * Purchase comments.
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_free' => $this->is_free,
            'is_mail_refund_send' => $this->is_mail_refund_send,
            'is_void' => $this->is_void,
            'k_business' => $this->k_business,
            'k_purchase' => $this->k_purchase,
            'a_pay_refund_method' => $this->a_pay_refund_method,
            'a_refund' => $this->a_refund,
            'a_refund_item' => $this->a_refund_item,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
