<?php

namespace WlSdk\Wl\Shop\Product\Inventory\Report;

class InventoryShopCategoryGetRequest
{
    /**
     * The key of the business to get shop categories for.
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
