<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

/**
 * Response from POST
 */
class TerminalTransactionStartPostResponse
{
    /**
     * Key of payment transaction that was created.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Gateway Ticket ID.
     *
     * `null` in case response has not received yet or request is failed.
     *
     * @var string|null
     */
    public ?string $s_ticket_id = null;

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
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->s_ticket_id = isset($data['s_ticket_id']) ? (string)$data['s_ticket_id'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
