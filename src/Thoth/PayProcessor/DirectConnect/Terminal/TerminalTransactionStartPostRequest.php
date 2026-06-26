<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

class TerminalTransactionStartPostRequest
{
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
     * The type of transaction you wish to create.
     *
     * One of {@link \WlSdk\Thoth\PayProcessor\DirectConnect\Transaction\PureCloudTransactionTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\DirectConnect\Transaction\PureCloudTransactionTypeSid
     */
    public ?int $id_transaction_type = null;

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
     * Should terminal prompt for tip entry.
     *
     * For {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid} can be used only when transaction type is {@link
     * \WlSdk\Thoth\PayProcessor\DirectConnect\Transaction\PureCloudTransactionTypeSid}.
     *
     * @var bool|null
     */
    public ?bool $is_prompt_for_tip = null;

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
     * Unique terminal identifier.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_terminal_id = null;

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
            'id_currency' => $this->id_currency,
            'id_pay_actor' => $this->id_pay_actor,
            'id_transaction_type' => $this->id_transaction_type,
            'is_authorize' => $this->is_authorize,
            'is_prompt_for_tip' => $this->is_prompt_for_tip,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_method' => $this->k_pay_method,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            's_terminal_id' => $this->s_terminal_id,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
