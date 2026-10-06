<?php

namespace WlSdk\Wl\Staff\Load;

class LoadPutResponseWork
{
    /**
     * Date and time in UTC when the staff member clocked in.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Local date and time when the staff member clocked in.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key. `null` if the location could not be resolved for the work session.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay rate key used for the work session.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function __construct(array $data)
    {
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
    }
}
