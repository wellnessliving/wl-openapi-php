<?php

namespace WlSdk\Wl\Login\Attendance;

/**
 * Response from GET
 */
class AttendanceListGetResponse
{
    /**
     * No description.
     *
     * @var AttendanceListGetResponseListActive[]|null
     */
    public ?array $a_list_active = null;

    /**
     * No description.
     *
     * @var AttendanceListGetResponseListConfirm[]|null
     */
    public ?array $a_list_confirm = null;

    /**
     * No description.
     *
     * @var AttendanceListGetResponseListWait[]|null
     */
    public ?array $a_list_wait = null;

    /**
     * The maximum capacity of the class or event session.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Count client on the attendance.
     *
     * @var int|null
     */
    public ?int $i_client = null;

    /**
     * The maximum number of clients on wait list of the class or event session.
     * `0` for appointments, use [AppointmentWaitListApi](/Wl/Appointment/WaitList/AppointmentWaitList.json)
     * instead.
     *
     * @var int|null
     */
    public ?int $i_wait_list_limit = null;

    /**
     * `true` to use class/event specific wait list limit, `false` to use the limit from default policies.
     * `false` for appointments. Use [AppointmentWaitListApi](/Wl/Appointment/WaitList/AppointmentWaitList.json)
     * instead.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_limit = null;

    /**
     * The Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_list_active = isset($data['a_list_active']) ? array_map(static fn ($item) => new AttendanceListGetResponseListActive((array)$item), (array)$data['a_list_active']) : null;
        $this->a_list_confirm = isset($data['a_list_confirm']) ? array_map(static fn ($item) => new AttendanceListGetResponseListConfirm((array)$item), (array)$data['a_list_confirm']) : null;
        $this->a_list_wait = isset($data['a_list_wait']) ? array_map(static fn ($item) => new AttendanceListGetResponseListWait((array)$item), (array)$data['a_list_wait']) : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_client = isset($data['i_client']) ? (int)$data['i_client'] : null;
        $this->i_wait_list_limit = isset($data['i_wait_list_limit']) ? (int)$data['i_wait_list_limit'] : null;
        $this->is_wait_list_limit = isset($data['is_wait_list_limit']) ? (bool)$data['is_wait_list_limit'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
