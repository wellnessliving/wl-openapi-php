<?php
namespace WlSdk\Wl\Profile\Attendance;

/**
 * Response from GET
 */
class AttendanceOverlapGetResponse
{
    /**
     * No description.
     *
     * @var AttendanceOverlapGetResponseVisitList[]|null
     */
    public ?array $a_visit_list = null;

    public function __construct(array $data)
    {
        $this->a_visit_list = isset($data['a_visit_list']) ? array_map(static fn($item) => new AttendanceOverlapGetResponseVisitList((array)$item), (array)$data['a_visit_list']) : null;
    }
}
