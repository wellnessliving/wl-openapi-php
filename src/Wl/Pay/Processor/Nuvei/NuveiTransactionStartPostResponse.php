<?php

namespace WlSdk\Wl\Pay\Processor\Nuvei;

/**
 * Response from POST
 */
class NuveiTransactionStartPostResponse
{
    /**
     * Credit card type.
     * `null` in case card type can not be determined.
     *
     * @var int|null
     * @see \WlSdk\Thoth\WlPay\Bank\Card\CardTypeEnum
     */
    public ?int $id_card_type = null;

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
     * Error message.
     *
     * `null` in case response has not received yet or request is not failed.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->id_card_type = isset($data['id_card_type']) ? (int)$data['id_card_type'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
