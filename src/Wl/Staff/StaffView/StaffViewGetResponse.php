<?php
namespace WlSdk\Wl\Staff\StaffView;

/**
 * Response from GET
 */
class StaffViewGetResponse
{
    /**
     * An array containing information about the classes this staff member is running.
     * Each element contains another array with three elements:
     *
     * @var StaffViewGetResponseClassDay[]|null
     */
    public ?array $a_class_day = null;

    /**
     * An array listing the class sessions the staff member provides at each location.
     *
     * @var StaffViewGetResponseResultList[]|null
     */
    public ?array $a_result_list = null;

    /**
     * An array containing information about the staff member.
     *
     * @var StaffViewGetResponseStaff|null
     */
    public ?StaffViewGetResponseStaff $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? array_map(static fn($item) => new StaffViewGetResponseClassDay((array)$item), (array)$data['a_class_day']) : null;
        $this->a_result_list = isset($data['a_result_list']) ? array_map(static fn($item) => new StaffViewGetResponseResultList((array)$item), (array)$data['a_result_list']) : null;
        $this->a_staff = isset($data['a_staff']) ? new StaffViewGetResponseStaff((array)$data['a_staff']) : null;
    }
}
