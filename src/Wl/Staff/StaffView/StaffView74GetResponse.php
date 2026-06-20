<?php
namespace WlSdk\Wl\Staff\StaffView;

/**
 * Response from GET
 */
class StaffView74GetResponse
{
    /**
     * An array containing information about the classes this staff member is running.
     * Each element contains another array with three elements:
     *
     * @var StaffView74GetResponseClassDay[]|null
     */
    public ?array $a_class_day = null;

    /**
     * An array listing the class sessions the staff member provides at each location.
     *
     * @var StaffView74GetResponseResultList[]|null
     */
    public ?array $a_result_list = null;

    /**
     * An array containing information about the staff member.
     *
     * @var StaffView74GetResponseStaff|null
     */
    public ?StaffView74GetResponseStaff $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? array_map(static fn($item) => new StaffView74GetResponseClassDay((array)$item), (array)$data['a_class_day']) : null;
        $this->a_result_list = isset($data['a_result_list']) ? array_map(static fn($item) => new StaffView74GetResponseResultList((array)$item), (array)$data['a_result_list']) : null;
        $this->a_staff = isset($data['a_staff']) ? new StaffView74GetResponseStaff((array)$data['a_staff']) : null;
    }
}
