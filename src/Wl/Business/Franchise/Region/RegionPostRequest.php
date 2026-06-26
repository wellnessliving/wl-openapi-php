<?php

namespace WlSdk\Wl\Business\Franchise\Region;

class RegionPostRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise region key. Primary key in the RegionSql table.
     * If `null` need create franchise region.
     *
     * @var string|null
     */
    public ?string $k_franchise_region = null;

    /**
     * List of location.
     *
     * @var array|null
     */
    public ?array $a_location = null;

    /**
     * Region description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Region name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * User staff key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_region' => $this->k_franchise_region,
            'a_location' => $this->a_location,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
