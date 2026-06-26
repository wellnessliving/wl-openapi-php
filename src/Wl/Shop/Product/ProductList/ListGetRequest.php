<?php

namespace WlSdk\Wl\Shop\Product\ProductList;

class ListGetRequest
{
    /**
     * Whether to return franchisee-created products (if business is franchisor).
     * `true` to include franchisee-created products.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * `true` to get only gift cards available for current user; `false` to get all gift cards.
     *
     * @var bool|null
     */
    public ?bool $is_frontend = null;

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
            'is_franchise' => $this->is_franchise,
            'is_frontend' => $this->is_frontend,
            'is_inactive_include' => $this->is_inactive_include,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
