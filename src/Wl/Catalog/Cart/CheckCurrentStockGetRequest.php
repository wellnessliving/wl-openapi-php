<?php

namespace WlSdk\Wl\Catalog\Cart;

class CheckCurrentStockGetRequest
{
    /**
     * Purchase items.
     * Every element has next fields:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Business key, primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key, primary key in RsLocationSql table.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
