<?php

namespace WlSdk\Core\Sms\Response;

class ResponseTwilioPostRequest
{
    /**
     * Unique identifier of the message.
     *
     * @var string|null
     */
    public ?string $s_id_message = null;

    /**
     * Body of the SMS.
     *
     * @var string|null
     */
    public ?string $text_body = null;

    /**
     * The recipient phone number.
     *
     * @var string|null
     */
    public ?string $text_phone_from = null;

    /**
     * The sender phone number.
     *
     * @var string|null
     */
    public ?string $text_phone_to = null;

    public function params(): array
    {
        return array_filter(
            [
            's_id_message' => $this->s_id_message,
            'text_body' => $this->text_body,
            'text_phone_from' => $this->text_phone_from,
            'text_phone_to' => $this->text_phone_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
