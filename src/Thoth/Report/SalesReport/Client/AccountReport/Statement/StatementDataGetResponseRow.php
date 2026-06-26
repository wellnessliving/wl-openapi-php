<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

class StatementDataGetResponseRow
{
    /**
     * Date and time in local business timezone (MySQL datetime format). Used for display.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Charge amount (positive). `null` if the transaction is a credit.
     *
     * @var string|null
     */
    public ?string $m_charge = null;

    /**
     * Payment amount (positive). `null` if the transaction is a debit.
     *
     * @var string|null
     */
    public ?string $m_payment = null;

    /**
     * Running balance after this transaction, sign-flipped.
     *
     * @var string|null
     */
    public ?string $m_balance = null;

    /**
     * Comma-separated item names.
     *
     * @var string|null
     */
    public ?string $text_item = null;

    /**
     * Payment method display name.
     *
     * @var string|null
     */
    public ?string $text_payment_method = null;

    /**
     * Transaction date formatted in business locale (e.g. "Dec 1, 2025").
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * Transaction time formatted in business locale (e.g. "2:30pm").
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Transaction type label (shown in bold, first line of Item column).
     *
     * @var string|null
     */
    public ?string $text_type = null;

    /**
     * Name of the client who received this transaction.
     *    Populated only when `is_include_relationship` is `true`.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    public function __construct(array $data)
    {
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
        $this->m_charge = isset($data['m_charge']) ? (string)$data['m_charge'] : null;
        $this->m_payment = isset($data['m_payment']) ? (string)$data['m_payment'] : null;
        $this->m_balance = isset($data['m_balance']) ? (string)$data['m_balance'] : null;
        $this->text_item = isset($data['text_item']) ? (string)$data['text_item'] : null;
        $this->text_payment_method = isset($data['text_payment_method']) ? (string)$data['text_payment_method'] : null;
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->text_type = isset($data['text_type']) ? (string)$data['text_type'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
    }
}
