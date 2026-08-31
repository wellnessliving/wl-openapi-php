<?php

namespace WlSdk\Wl\Profile\Attendance;

/**
 * Response from GET
 */
class AttendanceOverlapGetResponse
{
    /**
     * List of visits that overlap with the specified data.
     *
     * @var AttendanceOverlapGetResponseVisitList[]|null
     */
    public ?array $a_visit_list = null;

    /**
     * Whether at least one overlap exists.
     *
     * @var bool|null
     */
    public ?bool $is_overlap = null;

    public function __construct(array $data)
    {
        $this->a_visit_list = isset($data['a_visit_list']) ? array_map(static fn ($item) => new AttendanceOverlapGetResponseVisitList((array)$item), (array)$data['a_visit_list']) : null;
        $this->is_overlap = isset($data['is_overlap']) ? (bool)$data['is_overlap'] : null;
    }
}
