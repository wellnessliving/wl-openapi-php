<?php

namespace WlSdk\Wl\Shop\Category\StaffApp;

class CategoryGetRequest
{
    /**
     * Key of business to get categories for.
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
