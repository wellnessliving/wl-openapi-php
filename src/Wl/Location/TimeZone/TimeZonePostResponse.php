<?php

namespace WlSdk\Wl\Location\TimeZone;

/**
 * Response from POST
 */
class TimeZonePostResponse
{
    /**
     * Time zone information.
     * Relevant parts of the geo code request result:
     *
     * `null` if no result.
     *
     * @var TimeZonePostResponseTimezone|null
     */
    public ?TimeZonePostResponseTimezone $a_timezone = null;

    /**
     * `true` if user can skip the check and save not recommended timezone.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    public function __construct(array $data)
    {
        $this->a_timezone = isset($data['a_timezone']) ? new TimeZonePostResponseTimezone((array)$data['a_timezone']) : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
    }
}
