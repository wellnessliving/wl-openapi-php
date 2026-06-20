<?php
namespace WlSdk\Wl\Staff\StaffList;

class StaffListGetResponseStaffStaffService
{
    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Staff pay key for this service.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function __construct(array $data)
    {
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
    }
}
