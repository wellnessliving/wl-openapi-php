<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class CatalogProductGetRequest
{
    /**
     * Additional data to filter products.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

    /**
     * The currently shown element.
     *
     * @var int|null
     */
    public ?int $i_last = null;

    /**
     * The business key to get products for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The selected shop category.
     *
     * This will be `0` for the system's Unassigned category or `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The cache key used to get products.
     *
     * @var string|null
     */
    public ?string $s_cache_key = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_filter' => $this->a_filter,
            'i_last' => $this->i_last,
            'k_business' => $this->k_business,
            'k_shop_category' => $this->k_shop_category,
            's_cache_key' => $this->s_cache_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
