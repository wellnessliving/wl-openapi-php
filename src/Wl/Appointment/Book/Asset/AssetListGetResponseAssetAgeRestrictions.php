<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetAgeRestrictions
{
    /**
     * The minimum age permitted for the event. This will be `null` if a minimum age isn't set or available.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * The maximum age permitted for the event. This will be `null` if a maximum age isn't set or available.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * This will be `true` if age restrictions are public and available. Otherwise, this will be `false` if they're
     * hidden.
     * When restrictions are hidden and current user isn't a staff member, the age range will be empty.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    public function __construct(array $data)
    {
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
    }
}
