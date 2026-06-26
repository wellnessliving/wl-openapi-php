<?php

namespace WlSdk\Wl\Resource\Promotion;

class ResourcePromotionGetRequest
{
    /**
     * The key of the business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Resource key. Primary key in RsResourceSql table.
     *  The resource with which you want to connect the promotions. `null` or `0` if you need to return a list
     *  of promotions for an uncreated resource.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_resource' => $this->k_resource,
            ],
            static fn ($v) => $v !== null
        );
    }
}
