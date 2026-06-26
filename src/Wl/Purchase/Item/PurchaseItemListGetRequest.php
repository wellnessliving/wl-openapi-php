<?php

namespace WlSdk\Wl\Purchase\Item;

class PurchaseItemListGetRequest
{
    /**
     * Define a different type result of API. For economy of traffic `false` it means in response will less data.
     * Otherwise, more detailed data will be returned.
     *
     * @var bool|null
     */
    public ?bool $is_web = null;

    /**
     * Purchase ID.
     * Primary key in RsPurchaseSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_web' => $this->is_web,
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
