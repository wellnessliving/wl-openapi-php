<?php

namespace WlSdk\Wl\Collector;

class DebtListGetResponseDebt
{
    /**
     * The birth date of the debtor client.
     *
     * @var string|null
     */
    public ?string $dl_client_birth = null;

    /**
     * The date and time in UTC from which the debtor client is a member of the business.
     *
     * @var string|null
     */
    public ?string $dtu_client_since = null;

    /**
     * The date and time in UTC of the last payment on the debtor client's account.
     *
     * @var string|null
     */
    public ?string $dtu_due = null;

    /**
     * The date and time in UTC when the client was added to the list of debtors.
     *
     * @var string|null
     */
    public ?string $dtu_add = null;

    /**
     * The date and time in UTC when the debt was fully ceased.
     *
     * @var string|null
     */
    public ?string $dtu_cease = null;

    /**
     * The debt currency ID. One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * The business key where the debt occurred.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The debt key, which should be used for debt payment.
     *
     * @var string|null
     */
    public ?string $k_collector_debt = null;

    /**
     * The transaction key after which the debt occurred.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction_debt = null;

    /**
     * The last transaction key on account after the debt occurred.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction_last = null;

    /**
     * The initial amount of the debt.
     *
     * @var string|null
     */
    public ?string $m_amount_debt = null;

    /**
     * The amount paid for debt.
     *
     * @var string|null
     */
    public ?string $m_amount_paid = null;

    /**
     * The title of the business.
     *
     * @var string|null
     */
    public ?string $text_business_title = null;

    /**
     * The full name of the debtor client.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * The address of the debtor client.
     *
     * @var string|null
     */
    public ?string $text_client_address = null;

    /**
     * The email address of the debtor client.
     *
     * @var string|null
     */
    public ?string $text_client_mail = null;

    /**
     * The phone number of the debtor client.
     *
     * @var string|null
     */
    public ?string $text_client_phone = null;

    /**
     * The ZIP code of the debtor client.
     *
     * @var string|null
     */
    public ?string $text_client_zip = null;

    /**
     * The notification message sent when the debt payment is missed.
     *
     * @var string|null
     */
    public ?string $text_skip = null;

    /**
     * The user key of the debt owner.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->dl_client_birth = isset($data['dl_client_birth']) ? (string)$data['dl_client_birth'] : null;
        $this->dtu_client_since = isset($data['dtu_client_since']) ? (string)$data['dtu_client_since'] : null;
        $this->dtu_due = isset($data['dtu_due']) ? (string)$data['dtu_due'] : null;
        $this->dtu_add = isset($data['dtu_add']) ? (string)$data['dtu_add'] : null;
        $this->dtu_cease = isset($data['dtu_cease']) ? (string)$data['dtu_cease'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_collector_debt = isset($data['k_collector_debt']) ? (string)$data['k_collector_debt'] : null;
        $this->k_pay_transaction_debt = isset($data['k_pay_transaction_debt']) ? (string)$data['k_pay_transaction_debt'] : null;
        $this->k_pay_transaction_last = isset($data['k_pay_transaction_last']) ? (string)$data['k_pay_transaction_last'] : null;
        $this->m_amount_debt = isset($data['m_amount_debt']) ? (string)$data['m_amount_debt'] : null;
        $this->m_amount_paid = isset($data['m_amount_paid']) ? (string)$data['m_amount_paid'] : null;
        $this->text_business_title = isset($data['text_business_title']) ? (string)$data['text_business_title'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->text_client_address = isset($data['text_client_address']) ? (string)$data['text_client_address'] : null;
        $this->text_client_mail = isset($data['text_client_mail']) ? (string)$data['text_client_mail'] : null;
        $this->text_client_phone = isset($data['text_client_phone']) ? (string)$data['text_client_phone'] : null;
        $this->text_client_zip = isset($data['text_client_zip']) ? (string)$data['text_client_zip'] : null;
        $this->text_skip = isset($data['text_skip']) ? (string)$data['text_skip'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
