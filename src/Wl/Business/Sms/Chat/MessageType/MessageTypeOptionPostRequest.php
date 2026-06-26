<?php

namespace WlSdk\Wl\Business\Sms\Chat\MessageType;

class MessageTypeOptionPostRequest
{
    /**
     * Business key within which setting is managed.
     * `null` if business key was not passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of selected message type.
     *
     * @var int[]|null
     */
    public ?array $a_selected_message_type = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_selected_message_type' => $this->a_selected_message_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
