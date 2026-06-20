<?php
namespace WlSdk\Wl\Fitbuilder;

class MessagePostRequest
{
    /**
     * Messenger channel key.
     *
     * @var string|null
     */
    public ?string $k_channel = null;

    /**
     * Messenger information:
     *
     * @var array|null
     */
    public ?array $a_data = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_channel' => $this->k_channel,
            'a_data' => $this->a_data,
            ],
            static fn($v) => $v !== null
        );
    }
}
