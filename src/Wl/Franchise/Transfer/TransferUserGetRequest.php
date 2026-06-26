<?php

namespace WlSdk\Wl\Franchise\Transfer;

class TransferUserGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Transfer uid key.
     *
     * @var string|null
     */
    public ?string $uid_transfer = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_transfer' => $this->uid_transfer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
