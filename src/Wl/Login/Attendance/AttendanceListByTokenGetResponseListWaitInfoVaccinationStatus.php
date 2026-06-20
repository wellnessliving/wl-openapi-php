<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListWaitInfoVaccinationStatus
{
    /**
     * Vaccination status sid. Result from {@link \WlSdk\Wl\Login\Member\VaccinationStatus\VaccinationStatusSid}
     * method.
     *
     * @var string|null
     */
    public ?string $sid_vaccination_status = null;

    /**
     * Vaccination status.
     *
     * @var string|null
     */
    public ?string $text_vaccination_status = null;

    public function __construct(array $data)
    {
        $this->sid_vaccination_status = isset($data['sid_vaccination_status']) ? (string)$data['sid_vaccination_status'] : null;
        $this->text_vaccination_status = isset($data['text_vaccination_status']) ? (string)$data['text_vaccination_status'] : null;
    }
}
