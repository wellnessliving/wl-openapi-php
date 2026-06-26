<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundGetResponsePayTransaction
{
    /**
     * A drop-down list data to select a refund method. See `getRefundMethodOptions()`.
     *
     * @var array|null
     */
    public ?array $a_pay_refund_method = null;

    /**
     * `true` when payment transaction can be refunded.
     *
     * @var bool|null
     */
    public ?bool $can_refund = null;

    /**
     * Payment method. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * `true` when we are waiting when financial institution (e.g. bank) will process our transaction.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * Amount of returned funds.
     *
     * @var string|null
     */
    public ?string $f_amount_refunded = null;

    /**
     * Amount of the transaction after application of all refunds.
     *
     * @var string|null
     */
    public ?string $f_amount_rest = null;

    /**
     * Transaction key. Primary key in RsPayTransactionSql.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Part of account number (Credit Card, bank account).
     *
     * @var string|null
     */
    public ?string $text_card = null;

    /**
     * Additional information attached to the transaction.
     *
     * @var string|null
     */
    public ?string $text_info = null;

    /**
     * Transaction exception source for a translated message
     *
     * @var string|null
     */
    public ?string $text_pay_exception = null;

    /**
     * Payment method title.
     *
     * @var string|null
     */
    public ?string $text_pay_method = null;

    /**
     * Transaction status title.
     *
     * @var string|null
     */
    public ?string $text_pay_transaction_status = null;

    /**
     * Formatted amount of returned funds.
     *
     * @var string|null
     */
    public ?string $text_amount_refunded = null;

    /**
     * Formatted amount of the transaction after application of all refunds.
     *
     * @var string|null
     */
    public ?string $text_amount_rest = null;

    /**
     * Formatted amount of the transaction.
     *
     * @var string|null
     */
    public ?string $text_amount_start = null;

    /**
     * Transaction status string identifier.
     *
     * @var string|null
     */
    public ?string $sid_pay_transaction_status = null;

    /**
     * Transaction details page URL.
     *
     * @var string|null
     */
    public ?string $url_transaction_detail = null;

    public function __construct(array $data)
    {
        $this->a_pay_refund_method = isset($data['a_pay_refund_method']) ? (array)$data['a_pay_refund_method'] : null;
        $this->can_refund = isset($data['can_refund']) ? (bool)$data['can_refund'] : null;
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->f_amount_refunded = isset($data['f_amount_refunded']) ? (string)$data['f_amount_refunded'] : null;
        $this->f_amount_rest = isset($data['f_amount_rest']) ? (string)$data['f_amount_rest'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->text_card = isset($data['text_card']) ? (string)$data['text_card'] : null;
        $this->text_info = isset($data['text_info']) ? (string)$data['text_info'] : null;
        $this->text_pay_exception = isset($data['text_pay_exception']) ? (string)$data['text_pay_exception'] : null;
        $this->text_pay_method = isset($data['text_pay_method']) ? (string)$data['text_pay_method'] : null;
        $this->text_pay_transaction_status = isset($data['text_pay_transaction_status']) ? (string)$data['text_pay_transaction_status'] : null;
        $this->text_amount_refunded = isset($data['text_amount_refunded']) ? (string)$data['text_amount_refunded'] : null;
        $this->text_amount_rest = isset($data['text_amount_rest']) ? (string)$data['text_amount_rest'] : null;
        $this->text_amount_start = isset($data['text_amount_start']) ? (string)$data['text_amount_start'] : null;
        $this->sid_pay_transaction_status = isset($data['sid_pay_transaction_status']) ? (string)$data['sid_pay_transaction_status'] : null;
        $this->url_transaction_detail = isset($data['url_transaction_detail']) ? (string)$data['url_transaction_detail'] : null;
    }
}
