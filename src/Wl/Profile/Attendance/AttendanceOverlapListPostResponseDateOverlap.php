<?php

namespace WlSdk\Wl\Profile\Attendance;

class AttendanceOverlapListPostResponseDateOverlap
{
    /**
     * List of visits that overlap with the checked session. Same structure as
     * {@link \WlSdk\Wl\Profile\Attendance\AttendanceOverlapGetResponse::$a_visit_list}. Present only if the
     * current user has full access to the
     * target user's visits (the target user itself or a family relative).
     * Empty for guest-level access, to avoid exposing another member's visit details.
     *
     * @var array[]|null
     */
    public ?array $a_visit_list = null;

    /**
     * `true` if the checked session overlaps with an already booked visit, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_overlap = null;

    public function __construct(array $data)
    {
        $this->a_visit_list = isset($data['a_visit_list']) ? (array)$data['a_visit_list'] : null;
        $this->is_overlap = isset($data['is_overlap']) ? (bool)$data['is_overlap'] : null;
    }
}
