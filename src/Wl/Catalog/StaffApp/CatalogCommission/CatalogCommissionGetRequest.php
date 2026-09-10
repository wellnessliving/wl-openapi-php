<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

class CatalogCommissionGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Customer login key.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_customer' => $this->uid_customer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
