<?php

namespace WlSdk\Wl\Profile\Attendance;

/**
 * Response from POST
 */
class AttendanceOverlapListPostResponse
{
    /**
     * Overlap result for every checked session. Key is `i` from {@link
     * \WlSdk\Wl\Profile\Attendance\AttendanceOverlapList}.
     *   Value has the following keys:
     *
     * @var AttendanceOverlapListPostResponseDateOverlap[]|null
     */
    public ?array $a_date_overlap = null;

    public function __construct(array $data)
    {
        $this->a_date_overlap = isset($data['a_date_overlap']) ? array_map(static fn ($item) => new AttendanceOverlapListPostResponseDateOverlap((array)$item), (array)$data['a_date_overlap']) : null;
    }
}
