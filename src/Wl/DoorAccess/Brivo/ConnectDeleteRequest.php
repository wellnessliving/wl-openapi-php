<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

class ConnectDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Additional action to do during disconnect.
     * empty - if no additional actions,
     * `full` - when need to erase all database records
     *
     * @var string|null
     */
    public ?string $s_action = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_action' => $this->s_action,
            ],
            static fn ($v) => $v !== null
        );
    }
}
