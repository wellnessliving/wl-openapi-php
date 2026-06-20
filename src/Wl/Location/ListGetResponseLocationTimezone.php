<?php

namespace WlSdk\Wl\Location;

class ListGetResponseLocationTimezone
{
    /**
     * Timezone key.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * User-friendly short timezone abbreviation, for example 'EST' or 'PST'.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    /**
     * Full timezone name, for example 'America/New_York'.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
