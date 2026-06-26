<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

/**
 * Response from POST
 */
class NuveiTransactionStartPostResponse
{
    /**
     * Credit card type.
     * `null` in case card type can not be determined.
     *
     * @var array|null
     */
    public ?array $id_card_type = null;

    /**
     * Key of payment transaction that was created.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

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
        $this->id_card_type = isset($data['id_card_type']) ? (array)$data['id_card_type'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
