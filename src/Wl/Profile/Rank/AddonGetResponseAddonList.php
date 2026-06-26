<?php

namespace WlSdk\Wl\Profile\Rank;

class AddonGetResponseAddonList
{
    /**
     * Array of addons.
     *
     * @var array|null
     */
    public ?array $a_addon = null;

    /**
     * The title for the row (Character | Skill).
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? (array)$data['a_addon'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
