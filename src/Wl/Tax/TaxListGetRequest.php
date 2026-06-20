<?php

namespace WlSdk\Wl\Tax;

class TaxListGetRequest
{
    /**
     * The key of the business for which to get a list of taxes.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
