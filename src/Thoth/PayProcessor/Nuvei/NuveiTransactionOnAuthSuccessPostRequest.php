<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

class NuveiTransactionOnAuthSuccessPostRequest
{
    /**
     * Whether authorization or capture should be performed.
     *
     * `true` (or anything that is not empty) to perform authorization.
     *
     * `false` (or anything that is empty, or do not pass this value) to charge the payment amount.
     *
     * @var bool|null
     */
    public ?bool $is_authorize = null;

    /**
     * Key of the business which receives the payment.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant that should be used to perform the request.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Key of a selected payment source.
     *
     * `null` in case when an existed payment source is not used.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Key of a custom payment method.
     *
     * `null` in case when not initialized yet or empty if payment is performed with a standard payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Key of payment transaction that was previously created with {@link
     * \WlSdk\Thoth\PayProcessor\Nuvei\NuveiOpenOrder}.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Payment amount.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount.
     *
     * `null` in case when not initialized yet, empty string or null for zero surcharge amount.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Contents of the encrypted token.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_encrypt = null;

    /**
     * The order ID provided by Nuvei.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_nuvei_order = null;

    /**
     * The session identifier to be used by the request that processes the newly opened order.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_nuvei_session = null;

    /**
     * Payment gateway-specific response object.
     *
     * @var string|null
     */
    public ?string $s_response = null;

    /**
     * The Gateway transaction ID.
     *
     * @var string|null
     */
    public ?string $s_transaction = null;

    /**
     * Payment owner user key.
     *
     * `null` in case when not initialized yet or if pay owner is anonymous.
     *
     * @var string|null
     */
    public ?string $uid_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_authorize' => $this->is_authorize,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_bank' => $this->k_pay_bank,
            'k_pay_method' => $this->k_pay_method,
            'k_pay_transaction' => $this->k_pay_transaction,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            's_encrypt' => $this->s_encrypt,
            's_nuvei_order' => $this->s_nuvei_order,
            's_nuvei_session' => $this->s_nuvei_session,
            's_response' => $this->s_response,
            's_transaction' => $this->s_transaction,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
