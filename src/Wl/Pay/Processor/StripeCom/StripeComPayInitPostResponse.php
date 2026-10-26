<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

/**
 * Response from POST
 */
class StripeComPayInitPostResponse
{
    /**
     * Status of this Payment Intent.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentStatusSid
     */
    public ?int $id_status = null;

    /**
     * Key of payment transaction that was created.
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
     * `null` in case when not initialized yet, empty string or null for zero surcharge amount. See
     * AbstractTransactionStartupApi::$m_amount about a subclass correcting this value (SAL-1314).
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * ID of the Checkout Session when the client card form runs on a Checkout Session.
     *
     * `null` if the form runs on a Payment Intent. In that case {@link
     * \WlSdk\Thoth\PayProcessor\StripeCom\StripeComPayInit} is the
     * client secret of the session, and {@link \WlSdk\Thoth\PayProcessor\StripeCom\StripeComPayInit} is empty:
     * Stripe creates the
     * Payment Intent when the client confirms the session.
     *
     * @var string|null
     */
    public ?string $s_checkout_session = null;

    /**
     * Payment Intent client secret key.
     *
     * @var string|null
     */
    public ?string $s_client_secret = null;

    /**
     * Payment intent ID.
     *
     * @var string|null
     */
    public ?string $s_payment_intent = null;

    /**
     * Email of the payer from the profile, for the client card form that runs on a Checkout Session.
     *
     * Stripe needs an email to complete a session. The client passes it to `confirm` of the session, because the
     * Stripe customer of the payer is created without an email.
     *
     * `null` if the card form does not run on a Checkout Session, or the payer has no email in the profile.
     *
     * @var string|null
     */
    public ?string $text_mail_payer = null;

    /**
     * Error message.
     *
     * `null` in case response has not received yet or request is not failed.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->s_checkout_session = isset($data['s_checkout_session']) ? (string)$data['s_checkout_session'] : null;
        $this->s_client_secret = isset($data['s_client_secret']) ? (string)$data['s_client_secret'] : null;
        $this->s_payment_intent = isset($data['s_payment_intent']) ? (string)$data['s_payment_intent'] : null;
        $this->text_mail_payer = isset($data['text_mail_payer']) ? (string)$data['text_mail_payer'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
