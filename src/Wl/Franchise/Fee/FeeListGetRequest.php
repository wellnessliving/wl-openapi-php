<?php

namespace WlSdk\Wl\Franchise\Fee;

class FeeListGetRequest
{
    /**
     * If `true` - show inactive franchise fee. If `false` show only active franchise fee.
     *
     * @var bool|null
     */
    public ?bool $is_all = null;

    /**
     * If `true` - show removed franchise fee. `false` otherwise..
     *
     * @var bool|null
     */
    public ?bool $is_include_remove = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_all' => $this->is_all,
            'is_include_remove' => $this->is_include_remove,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
