<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

class StripeComPayInitPostRequest
{
    /**
     * Credit card data.
     *
     * Contents of the payment source as it presents on the payment form.
     *
     * Supplied in case payment source is card.
     * `null` if payment source is other than card or payment is initialized before card data is known.
     *
     * @var array|null
     */
    public ?array $a_card = null;

    /**
     * ID of the currency.
     *
     * One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * `null` in case when not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * ID of the actor.
     *
     * One of {@link \WlSdk\RsPayActorSid} constants.
     *
     * `null` in case when not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * ID of pay method.
     *
     * One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * `null` in case when not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

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
     * `true` if card swiper is used, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_pos = null;

    /**
     * `true` if Stripe Payment Element form (@link https://stripe.com/docs/payments/elements) is used, `false`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_stripe_elements = null;

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
     * Key of a custom payment method.
     *
     * `null` in case when not initialized yet or empty if payment is performed with a standard payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

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
     * Payment method ID.
     *
     * `null` if Payment intent must be created without existing Payment method.
     *
     * @var string|null
     */
    public ?string $s_payment_method = null;

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
            'a_card' => $this->a_card,
            'id_currency' => $this->id_currency,
            'id_pay_actor' => $this->id_pay_actor,
            'id_pay_method' => $this->id_pay_method,
            'is_authorize' => $this->is_authorize,
            'is_pos' => $this->is_pos,
            'is_stripe_elements' => $this->is_stripe_elements,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_method' => $this->k_pay_method,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            's_payment_method' => $this->s_payment_method,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
