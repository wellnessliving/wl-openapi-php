<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseAgeRestriction
{
    /**
     * Minimum age for service (years part).
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * Minimum age for service (months part).
     *
     * @var int|null
     */
    public ?int $i_age_from_month = null;

    /**
     * Minimum age for service (years part).
     *
     * @var int|null
     */
    public ?int $i_age_from_year = null;

    /**
     * Maximum age for service (years part).
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * Maximum age for service (months part).
     *
     * @var int|null
     */
    public ?int $i_age_to_month = null;

    /**
     * Maximum age for service (years part).
     *
     * @var int|null
     */
    public ?int $i_age_to_year = null;

    /**
     * Is service public even if user does not meet age requirements or not?
     *
     * `true` - to show service to everyone.
     * `false` - to show service only to users who meet age requirements.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    /**
     * Whether months are enabled for age restrictions.
     *
     * `true` - age restrictions can include number of months.
     * `false` - age restrictions can include only years.
     *
     * @var bool|null
     */
    public ?bool $is_month_enabled = null;

    public function __construct(array $data)
    {
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_from_month = isset($data['i_age_from_month']) ? (int)$data['i_age_from_month'] : null;
        $this->i_age_from_year = isset($data['i_age_from_year']) ? (int)$data['i_age_from_year'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->i_age_to_month = isset($data['i_age_to_month']) ? (int)$data['i_age_to_month'] : null;
        $this->i_age_to_year = isset($data['i_age_to_year']) ? (int)$data['i_age_to_year'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
        $this->is_month_enabled = isset($data['is_month_enabled']) ? (bool)$data['is_month_enabled'] : null;
    }
}
