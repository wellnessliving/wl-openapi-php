<?php

namespace WlSdk\Wl\Skin\Application\Connect\Edit;

class ConnectEditPostRequest
{
    /**
     * Data for send push.
     *
     * @var array|null
     */
    public ?array $a_push = null;

    /**
     * Message push.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_push' => $this->a_push,
            's_message' => $this->s_message,
            ],
            static fn ($v) => $v !== null
        );
    }
}
