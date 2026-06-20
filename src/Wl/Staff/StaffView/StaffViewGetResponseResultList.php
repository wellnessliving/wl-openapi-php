<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffViewGetResponseResultList
{
    /**
     * Contains a schedule of classes per day.
     * Each element has a structure like in `a_class_day` property.
     *
     * @var StaffViewGetResponseResultListClassDay|null
     */
    public ?StaffViewGetResponseResultListClassDay $a_class_day = null;

    /**
     * Staff information.
     * Each element has a structure like in `a_staff` property.
     *
     * @var StaffViewGetResponseResultListStaff|null
     */
    public ?StaffViewGetResponseResultListStaff $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? new StaffViewGetResponseResultListClassDay((array)$data['a_class_day']) : null;
        $this->a_staff = isset($data['a_staff']) ? new StaffViewGetResponseResultListStaff((array)$data['a_staff']) : null;
    }
}
