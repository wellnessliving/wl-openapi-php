<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

/**
 * Response from POST
 */
class StripeComPayInitPostResponse
{
    /**
     * Status of this Payment Intent.
     * One of {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentStatusSid} constants.
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
        $this->s_client_secret = isset($data['s_client_secret']) ? (string)$data['s_client_secret'] : null;
        $this->s_payment_intent = isset($data['s_payment_intent']) ? (string)$data['s_payment_intent'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
