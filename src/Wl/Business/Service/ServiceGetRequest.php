<?php

namespace WlSdk\Wl\Business\Service;

class ServiceGetRequest
{
    /**
     * Business key. Primary key in the RsBusiness table.
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
