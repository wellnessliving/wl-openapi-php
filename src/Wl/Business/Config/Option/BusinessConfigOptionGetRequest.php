<?php

namespace WlSdk\Wl\Business\Config\Option;

class BusinessConfigOptionGetRequest
{
    /**
     * Key of business. Primary key in RsBusinessSql.
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
