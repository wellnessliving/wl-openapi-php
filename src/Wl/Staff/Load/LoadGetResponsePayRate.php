<?php

namespace WlSdk\Wl\Staff\Load;

class LoadGetResponsePayRate
{
    /**
     * Custom data that depends on `id_staff_pay`.
     *
     * @var LoadGetResponsePayRateData|null
     */
    public ?LoadGetResponsePayRateData $a_data = null;

    /**
     * Pay rate type, one of {@link \WlSdk\RsStaffPaySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsStaffPaySid
     */
    public ?int $id_staff_pay = null;

    /**
     * Location key. Primary key from . This is a location where pay rate can be used for a staff load. If empty
     * then pay rate can be used in any location. Used only for pay
     * rates with `id_staff_pay` {@link \WlSdk\RsStaffPaySid} and `is_report`.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay rate identifier, primary key in
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * Name of the rate.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new LoadGetResponsePayRateData((array)$data['a_data']) : null;
        $this->id_staff_pay = isset($data['id_staff_pay']) ? (int)$data['id_staff_pay'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
