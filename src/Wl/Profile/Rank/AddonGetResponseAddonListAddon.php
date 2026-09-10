<?php

namespace WlSdk\Wl\Profile\Rank;

class AddonGetResponseAddonListAddon
{
    /**
     * HEX color code.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /**
     * The title for the color code.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
