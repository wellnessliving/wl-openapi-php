<?php

namespace WlSdk\Wl\Tax;

class TaxGetRequest
{
    /**
     * The tax key to get information for.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_tax' => $this->k_tax,
            ],
            static fn ($v) => $v !== null
        );
    }
}
