<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter;

class ScheduleListFilterGetResponseFilterConfig
{
    /**
     * Classes. Primary keys in RsClassSql table.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    /**
     * Events. Primary keys in RsClassSql table.
     *
     * @var string[]|null
     */
    public ?array $a_event = null;

    /**
     * Locations. Primary keys in RsLocationSql table.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Assets. Primary keys in RsResourceSql table.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * Appointment services. Primary keys in RsServiceSql table.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * Staff members. Primary keys in RsStaffSql table.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * Service types. Constants of {@link \WlSdk\RsServiceSid} class (excluding {@link \WlSdk\RsServiceSid}).
     *
     * @var int[]|null
     */
    public ?array $a_type = null;

    /**
     * `true` to show all staff members.
     * `false` to show only staff members from `a_staff` field.
     *
     * @var bool|null
     */
    public ?bool $is_staff_all = null;

    /**
     * `true` to show only available staff members; `false` to show any staff member.
     *
     * @var bool|null
     */
    public ?bool $is_staff_available = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? (array)$data['a_class'] : null;
        $this->a_event = isset($data['a_event']) ? (array)$data['a_event'] : null;
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_type = isset($data['a_type']) ? (array)$data['a_type'] : null;
        $this->is_staff_all = isset($data['is_staff_all']) ? (bool)$data['is_staff_all'] : null;
        $this->is_staff_available = isset($data['is_staff_available']) ? (bool)$data['is_staff_available'] : null;
    }
}
