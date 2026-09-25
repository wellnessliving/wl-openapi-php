<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Event key.
     *
     * `0` while a new event is created, so the key of the model of the client has a value. The key is only checked
     * when it points at an event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
