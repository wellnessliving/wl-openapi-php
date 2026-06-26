<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

class Conflict56GetRequest
{
    /**
     * List of add-ons. Primary keys in RsShopProductOptionSql table.
     *
     * @var string[]|null
     */
    public ?array $a_product = null;

    /**
     * Data of appointment repeat.
     * See key `a_repeat` of [FinishApi](/Wl/Appointment/Book/Finish/Finish.json) for details.
     *
     * `null` if repeat is not required.
     *
     * @var array|null
     */
    public ?array $a_repeat = null;

    /**
     * List of assets. Every element has next keys:
     *
     *
     * May be specified for service booking only.
     *
     * @var array[]|null
     */
    public ?array $a_resource = null;

    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Date/time of appointment. In location timezone.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Appointment duration.
     * Must be specified for asset booking only.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Appointment primary key in RsAppointmentSql table.
     * Empty for a new appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Asset primary key in RsResourceSql table.
     * Empty for service booking.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service primary key in RsServiceSql table.
     * Empty for asset booking.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Staff member primary key in RsStaffSql table.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The user key.
     *
     * This field is used if the client books for himself or for the relative.
     *
     * This field is incorrect to use for guest booking since in this case the client will be checked as a
     * relative.
     *
     * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Staff member user ID in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_product' => $this->a_product,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_uid' => $this->a_uid,
            'dt_date' => $this->dt_date,
            'i_duration' => $this->i_duration,
            'is_walk_in' => $this->is_walk_in,
            'k_appointment' => $this->k_appointment,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            'k_staff' => $this->k_staff,
            'uid' => $this->uid,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
