<?php

namespace WlSdk\Wl\Franchise\Transfer\Edit;

class TransferEditGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise transfer key. Primary key in TransferSql table.
     *
     * @var string|null
     */
    public ?string $k_franchise_transfer = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_transfer' => $this->k_franchise_transfer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
