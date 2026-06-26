<?php

namespace WlSdk\Wl\Location\TimeZone;

class TimeZonePostResponseTimezone
{
    /**
     * Maximum daylight savings offset in seconds. A value of 3600 indicates this location uses daylight savings
     * time, `null` if no dst info requested.
     *
     * @var int|null
     */
    public ?int $i_dst_offset = null;

    /**
     * The timezone's offset in seconds from UTC. Not all time zones will be evenly divisible by 3600.
     *
     * @var int|null
     */
    public ?int $i_raw_offset = null;

    /**
     * The time zone's ID in IANA.
     *
     * @var string|null
     */
    public ?string $text_time_zone_id = null;

    /**
     * The time zone's name.
     *
     * @var string|null
     */
    public ?string $text_time_zone_name = null;

    /**
     * The time zone's name in result of Google API.
     *
     * @var string|null
     */
    public ?string $text_time_zone_name_google = null;

    public function __construct(array $data)
    {
        $this->i_dst_offset = isset($data['i_dst_offset']) ? (int)$data['i_dst_offset'] : null;
        $this->i_raw_offset = isset($data['i_raw_offset']) ? (int)$data['i_raw_offset'] : null;
        $this->text_time_zone_id = isset($data['text_time_zone_id']) ? (string)$data['text_time_zone_id'] : null;
        $this->text_time_zone_name = isset($data['text_time_zone_name']) ? (string)$data['text_time_zone_name'] : null;
        $this->text_time_zone_name_google = isset($data['text_time_zone_name_google']) ? (string)$data['text_time_zone_name_google'] : null;
    }
}
