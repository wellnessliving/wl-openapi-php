<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

class PaymentIntentUpdatePostRequest
{
    /**
     * ID of the actor. One of {@link \WlSdk\RsPayActorSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Key of the business to update Payment Intent for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant to update Payment Intent for.
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
     * ID of the Checkout Session to update.
     * Required if {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} is empty.
     *
     * @var string|null
     */
    public ?string $s_checkout_session = null;

    /**
     * Payment intent ID to update.
     * Required if {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} is empty.
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
     * Items of the sale to set in the Checkout Session. Every element:
     *
     * The whole list is sent, the items of the session that are not in it are removed. The total of the items must
     * equal {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate}.
     * Empty to replace the items of the session with one item for {@link
     * \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate}.
     * Used only with {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate}.
     *
     * @var array[]|null
     */
    public ?array $a_line_item = null;

    /**
     * ID of the currency.
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
     * With {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} for a business that is under the rule
     * of the surcharge it is
     * the amount without the surcharge, and the answer gives the total with the surcharge decided by the server. A
     * form
     * that posts the model with the answer again, the total in it and the surcharge, gets the same: the posted
     * surcharge
     * is taken off the amount first.
     *
     * @var string|null
     */
    public ?string $m_amount = '0.00';

    /**
     * Surcharge amount to set.
     * Required.
     *
     * With {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} for a business that is under the rule
     * of the surcharge the
     * posted value is not charged: the surcharge is decided by the server and comes in the answer. The value only
     * tells
     * how much of {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} is the surcharge of an earlier
     * answer.
     *
     * @var string|null
     */
    public ?string $m_surcharge = '0.00';

    /**
     * The payment method of the new card to attach to the Payment Intent, `null` if there is none.
     *
     * The card form makes it after the card is entered (`stripe.createPaymentMethod()` of the Payment Element),
     * and the
     * payment is confirmed in the browser with the client secret alone. Stripe tells whether the card can be
     * surcharged
     * and the maximum only when a payment method is attached, so the server attaches it, decides the surcharge and
     * sets
     * the amount and the surcharge on the Payment Intent and on the transaction. A changed card is a new payment
     * method: the step is repeated, and the amount and the surcharge are put back by the same request. Not for a
     * Checkout Session, and not for a payment that is not under the rule of the surcharge (the business has no
     * surcharge
     * of the card, the country is not one of the rule, or the switch of the feature is off): the call is refused
     * with
     * `payment-method-rule`.
     *
     * @var string|null
     */
    public ?string $s_payment_method = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_pay_actor' => $this->id_pay_actor,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_transaction' => $this->k_pay_transaction,
            's_checkout_session' => $this->s_checkout_session,
            's_payment_intent' => $this->s_payment_intent,
            'uid_purchase' => $this->uid_purchase,
            'a_line_item' => $this->a_line_item,
            'id_currency' => $this->id_currency,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            's_payment_method' => $this->s_payment_method,
            ],
            static fn ($v) => $v !== null
        );
    }
}
