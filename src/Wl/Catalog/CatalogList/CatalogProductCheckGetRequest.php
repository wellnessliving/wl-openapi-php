<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class CatalogProductCheckGetRequest
{
    /**
     * Data array:
     * <ul>
     *    <li>string `uid`</li>
     *    <li>bool `is_backend`</li>
     *    <li>string `k_business`</li>
     * </ul>
     *
     * @var array|null
     */
    public ?array $a_data = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data' => $this->a_data,
            ],
            static fn ($v) => $v !== null
        );
    }
}
