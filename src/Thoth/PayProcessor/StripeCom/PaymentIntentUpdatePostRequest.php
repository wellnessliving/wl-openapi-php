<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

class PaymentIntentUpdatePostRequest
{
    /**
     * ID of the actor. One of {@link \WlSdk\RsPayActorSid} constants.
     * Required.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Key of the business to update Payment Intent for.
     * Primary key in RsBusinessSql.
     * Required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant to update Payment Intent for.
     * Primary key in RsBusinessMerchantSql.
     * Required.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Key of the payment transaction to update.
     * Required.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Payment intent ID to update.
     * Required.
     *
     * @var string|null
     */
    public ?string $s_payment_intent = null;

    /**
     * Payment owner user key.
     * `null` if pay owner is anonymous.
     *
     * @var string|null
     */
    public ?string $uid_purchase = null;

    /**
     * ID of the currency. One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     * Required.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * Payment amount to set.
     * Required.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount to set.
     * Required.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_pay_actor' => $this->id_pay_actor,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_transaction' => $this->k_pay_transaction,
            's_payment_intent' => $this->s_payment_intent,
            'uid_purchase' => $this->uid_purchase,
            'id_currency' => $this->id_currency,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            ],
            static fn ($v) => $v !== null
        );
    }
}
