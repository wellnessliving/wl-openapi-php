<?php

namespace WlSdk\Core\Sms\Status;

class SmsStatusPostRequest
{
    /**
     * Error code returned, if sending failed.
     *
     * @var int|null
     */
    public ?int $i_error_code = null;

    /**
     * Unique identifier of the message.
     *
     * @var string|null
     */
    public ?string $s_id_message = null;

    /**
     * The message status.
     *
     * @var string|null
     */
    public ?string $s_message_status = null;

    /**
     * Error message, if sending failed.
     *
     * @var string|null
     */
    public ?string $text_error = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_error_code' => $this->i_error_code,
            's_id_message' => $this->s_id_message,
            's_message_status' => $this->s_message_status,
            'text_error' => $this->text_error,
            ],
            static fn ($v) => $v !== null
        );
    }
}
