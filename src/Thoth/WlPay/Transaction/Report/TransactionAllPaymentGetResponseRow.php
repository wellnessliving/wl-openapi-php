<?php

namespace WlSdk\Thoth\WlPay\Transaction\Report;

class TransactionAllPaymentGetResponseRow
{
    /**
     * List of pay transactions associated with this row. Each element:
     *
     * @var TransactionAllPaymentGetResponseRowPayTransaction|null
     */
    public ?TransactionAllPaymentGetResponseRowPayTransaction $a_pay_transaction = null;

    /**
     * Start date and time of the purchase in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_purchase_start = null;

    /**
     * Purchase key.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Net sales amount.
     *
     * @var string|null
     */
    public ?string $m_net_sale = null;

    /**
     * Total tax amount.
     *
     * @var string|null
     */
    public ?string $m_total_tax = null;

    /**
     * First name of the client.
     *
     * @var string|null
     */
    public ?string $o_client_text_first = null;

    /**
     * Last name of the client.
     *
     * @var string|null
     */
    public ?string $o_client_text_last = null;

    /**
     * Full name of the client.
     *
     * @var string|null
     */
    public ?string $o_client_text_name = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $o_location_k_location = null;

    /**
     * Batch number of the first transaction in the row.
     *
     * @var string|null
     */
    public ?string $s_batch_number = null;

    /**
     * Street address of the location.
     *
     * @var string|null
     */
    public ?string $text_location_address = null;

    /**
     * Name of the location's city.
     *
     * @var string|null
     */
    public ?string $text_location_city = null;

    /**
     * Name of the location's country.
     *
     * @var string|null
     */
    public ?string $text_location_country = null;

    /**
     * Postal code of the location.
     *
     * @var string|null
     */
    public ?string $text_location_postal = null;

    /**
     * Name of the location's region.
     *
     * @var string|null
     */
    public ?string $text_location_region = null;

    /**
     * Name of the payment method used.
     *
     * @var string|null
     */
    public ?string $text_payment_method = null;

    /**
     * Name of the base payment method. If a custom method was used, this is the method it is based on.
     *
     * @var string|null
     */
    public ?string $text_payment_method_base = null;

    /**
     * Comma-separated list of tax names applied to the purchase.
     *
     * @var string|null
     */
    public ?string $text_tax_title = null;

    /**
     * Comma-separated list of tax values. Percentage-based taxes have `%` appended;
     * fixed-amount taxes have `$` appended.
     *
     * @var string|null
     */
    public ?string $text_tax_value = null;

    public function __construct(array $data)
    {
        $this->a_pay_transaction = isset($data['a_pay_transaction']) ? new TransactionAllPaymentGetResponseRowPayTransaction((array)$data['a_pay_transaction']) : null;
        $this->dtu_purchase_start = isset($data['dtu_purchase_start']) ? (string)$data['dtu_purchase_start'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
        $this->m_net_sale = isset($data['m_net_sale']) ? (string)$data['m_net_sale'] : null;
        $this->m_total_tax = isset($data['m_total_tax']) ? (string)$data['m_total_tax'] : null;
        $this->o_client_text_first = isset($data['o_client.text_first']) ? (string)$data['o_client.text_first'] : null;
        $this->o_client_text_last = isset($data['o_client.text_last']) ? (string)$data['o_client.text_last'] : null;
        $this->o_client_text_name = isset($data['o_client.text_name']) ? (string)$data['o_client.text_name'] : null;
        $this->o_location_k_location = isset($data['o_location.k_location']) ? (string)$data['o_location.k_location'] : null;
        $this->s_batch_number = isset($data['s_batch_number']) ? (string)$data['s_batch_number'] : null;
        $this->text_location_address = isset($data['text_location_address']) ? (string)$data['text_location_address'] : null;
        $this->text_location_city = isset($data['text_location_city']) ? (string)$data['text_location_city'] : null;
        $this->text_location_country = isset($data['text_location_country']) ? (string)$data['text_location_country'] : null;
        $this->text_location_postal = isset($data['text_location_postal']) ? (string)$data['text_location_postal'] : null;
        $this->text_location_region = isset($data['text_location_region']) ? (string)$data['text_location_region'] : null;
        $this->text_payment_method = isset($data['text_payment_method']) ? (string)$data['text_payment_method'] : null;
        $this->text_payment_method_base = isset($data['text_payment_method_base']) ? (string)$data['text_payment_method_base'] : null;
        $this->text_tax_title = isset($data['text_tax_title']) ? (string)$data['text_tax_title'] : null;
        $this->text_tax_value = isset($data['text_tax_value']) ? (string)$data['text_tax_value'] : null;
    }
}
