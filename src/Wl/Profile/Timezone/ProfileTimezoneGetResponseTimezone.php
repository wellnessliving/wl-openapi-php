<?php

namespace WlSdk\Wl\Profile\Timezone;

class ProfileTimezoneGetResponseTimezone
{
    /**
     * Timezone key. Primary key in AGeoTimezoneSql table.
     *
     * @var string|null
     */
    public ?string $k_geo_timezone = null;

    /**
     * Shift time zone.
     *
     * @var int|null
     */
    public ?int $i_shift = null;

    /**
     * File name.
     *
     * @var string|null
     */
    public ?string $s_file = null;

    /**
     * Order.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    /**
     * Timezone title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Timezone key.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    public function __construct(array $data)
    {
        $this->k_geo_timezone = isset($data['k_geo_timezone']) ? (string)$data['k_geo_timezone'] : null;
        $this->i_shift = isset($data['i_shift']) ? (int)$data['i_shift'] : null;
        $this->s_file = isset($data['s_file']) ? (string)$data['s_file'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
    }
}
