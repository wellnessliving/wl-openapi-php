<?php

namespace WlSdk\Wl\Promotion\Purchase;

class PurchaseListGetRequest
{
    /**
     * A flag to include inactive items in the query result.
     *
     * @var bool|null
     */
    public ?bool $is_inactive_include = null;

    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_inactive_include' => $this->is_inactive_include,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
