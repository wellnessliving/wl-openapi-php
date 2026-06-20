<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionSchedulePostRequest
{
    /**
     * The business key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the Self Check-In Web App.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The key of the user to show the schedule for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The date and time of the visit in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The key of the appointment to check in.
     *
     * If `null`, this is class visit or gym visit.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The key of the class schedule to check in.
     *
     * If `null`, this is an appointment visit or gym visit.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            'dtu_date' => $this->dtu_date,
            'k_appointment' => $this->k_appointment,
            'k_class_period' => $this->k_class_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
