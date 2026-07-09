<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

class StripeComPaymentIntentCancelPostRequest
{
    /**
     * ID of the actor.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant, that processes payment.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Pay transaction key, which was used to create payment intent.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Payment intent ID.
     *
     * @var string|null
     */
    public ?string $s_payment_intent = null;

    /**
     * Payment owner user key.
     *
     * @var string|null
     */
    public ?string $uid_purchase = null;

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
            ],
            static fn ($v) => $v !== null
        );
    }
}
