<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

class ConnectPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Api key.
     *
     * @var string|null
     */
    public ?string $s_api_key = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_api_key' => $this->s_api_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
