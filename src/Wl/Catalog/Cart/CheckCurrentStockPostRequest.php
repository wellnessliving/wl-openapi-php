<?php

namespace WlSdk\Wl\Catalog\Cart;

class CheckCurrentStockPostRequest
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

    /**
     * Purchase items.
     * This field is the same as `a_item`, but for POST method.
     *
     * Currently, it's prohibited to make API field working for both GET and POST, so it's necessary to make
     * another field
     *   for different method.
     *
     * Every element has next fields:
     *
     * @var array[]|null
     */
    public ?array $a_item_post = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'a_item_post' => $this->a_item_post,
            ],
            static fn ($v) => $v !== null
        );
    }
}
