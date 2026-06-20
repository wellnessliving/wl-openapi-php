<?php

namespace WlSdk\Wl\Resource\ResourceList;

class ListGetRequest
{
    /**
     * Type of the resource.
     *
     * 1 - if this is a bookable asset.
     * 2 - if this is an off-site location with its own address.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * Whether to return franchisee-created resources (if business is franchisor).
     * `true` to include franchisee-created resources.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key, primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_category' => $this->id_category,
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
