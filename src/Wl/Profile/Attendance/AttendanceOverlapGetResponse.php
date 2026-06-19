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
     * @var array[]|null
     */
    public ?array $a_visit_list = null;

    public function __construct(array $data)
    {
        $this->a_visit_list = isset($data['a_visit_list']) ? (array)$data['a_visit_list'] : null;
    }
}
