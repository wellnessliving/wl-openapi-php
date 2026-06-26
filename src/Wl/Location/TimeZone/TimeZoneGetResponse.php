<?php

namespace WlSdk\Wl\Location\TimeZone;

/**
 * Response from GET
 */
class TimeZoneGetResponse
{
    /**
     * User's timezone key, primary key in AGeoTimezoneSql table.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The timezone identifier according to the ION standard, which was determined through the Google API.
     *
     * @var string|null
     */
    public ?string $text_time_zone_google_id = null;

    /**
     * The system timezone name.
     *
     * @var string|null
     */
    public ?string $text_time_zone_name = null;

    public function __construct(array $data)
    {
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
        $this->text_time_zone_google_id = isset($data['text_time_zone_google_id']) ? (string)$data['text_time_zone_google_id'] : null;
        $this->text_time_zone_name = isset($data['text_time_zone_name']) ? (string)$data['text_time_zone_name'] : null;
    }
}
