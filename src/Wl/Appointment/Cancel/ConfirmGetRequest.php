<?php

namespace WlSdk\Wl\Appointment\Cancel;

class ConfirmGetRequest
{
    /**
     * End date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Cancelling status. One of {@link \WlSdk\Wl\Visit\VisitSid} constants.
     * Zero when status is choosing on form (opening form from schedule list view).
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * Is it recurring appointment cancellation for specific appointments.
     * `true` - for specific appointments; `false` - appointments going forward.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_specific = null;

    /**
     * Is it recurring appointment cancellation.
     *
     * `false` in case of cancellation of single appointment.
     *
     * @var bool|null
     */
    public ?bool $is_recurring = null;

    /**
     * Key of the cancelling appointment. Primary key in RsAppointmentSql table.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the visit to cancel. Primary key in RsVisitSql table.
     * Empty when visit key not known (opening form from schedule list view).
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'id_visit' => $this->id_visit,
            'is_appointment_specific' => $this->is_appointment_specific,
            'is_recurring' => $this->is_recurring,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
