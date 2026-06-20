<?php

namespace WlSdk\Wl\Staff\StaffView;

class StaffView74GetResponseResultList
{
    /**
     * Contains a schedule of classes per day.
     * Each element has a structure like in [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) property.
     *
     * @var StaffView74GetResponseResultListClassDay|null
     */
    public ?StaffView74GetResponseResultListClassDay $a_class_day = null;

    /**
     * Staff information.
     * Each element has a structure like in [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) property.
     *
     * @var StaffView74GetResponseResultListStaff|null
     */
    public ?StaffView74GetResponseResultListStaff $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? new StaffView74GetResponseResultListClassDay((array)$data['a_class_day']) : null;
        $this->a_staff = isset($data['a_staff']) ? new StaffView74GetResponseResultListStaff((array)$data['a_staff']) : null;
    }
}
