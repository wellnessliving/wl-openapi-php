<?php

namespace WlSdk\Wl\Business\Franchise;

class FranchiseGroupGetRequest
{
    /**
     * Key of business to get data for. It may be both franchisor and franchisee.
     *
     * Primary key in RsBusinessSql table.
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
