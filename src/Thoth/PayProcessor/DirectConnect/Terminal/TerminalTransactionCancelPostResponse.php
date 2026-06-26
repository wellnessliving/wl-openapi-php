<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

/**
 * Response from POST
 */
class TerminalTransactionCancelPostResponse
{
    /**
     * Arbitrary information about Payment Ticket, like error message.
     *
     * `null` in case response has not received yet or request is not failed.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
