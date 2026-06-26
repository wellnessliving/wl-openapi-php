<?php

namespace WlSdk\Wl\Schedule\Page\AppointmentView;

/**
 * Response from GET
 */
class AppointmentViewGetResponse
{
    /**
     * Appointment information:
     *
     * @var AppointmentViewGetResponseAppointment|null
     */
    public ?AppointmentViewGetResponseAppointment $a_appointment = null;

    /**
     * Asset list data.
     *
     * @var array[]|null
     */
    public ?array $a_asset = null;

    /**
     * Location information:
     *
     * @var AppointmentViewGetResponseLocation|null
     */
    public ?AppointmentViewGetResponseLocation $a_location = null;

    /**
     * Service logo data. Result of RsServiceLogo::data().
     *
     * @var array|null
     */
    public ?array $a_service_logo = null;

    public function __construct(array $data)
    {
        $this->a_appointment = isset($data['a_appointment']) ? new AppointmentViewGetResponseAppointment((array)$data['a_appointment']) : null;
        $this->a_asset = isset($data['a_asset']) ? (array)$data['a_asset'] : null;
        $this->a_location = isset($data['a_location']) ? new AppointmentViewGetResponseLocation((array)$data['a_location']) : null;
        $this->a_service_logo = isset($data['a_service_logo']) ? (array)$data['a_service_logo'] : null;
    }
}
