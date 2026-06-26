<?php

namespace WlSdk\Wl\Resource;

class ResourceGetRequest
{
    /**
     * Key of the business. Primary key from RsBusinessSql table.
     *
     * `null` - if not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location. Primary key from RsLocationSql table.
     *
     * `null` - if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the resource. Primary key from RsResourceSql table.
     *
     * `null` - if not set.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            ],
            static fn ($v) => $v !== null
        );
    }
}
