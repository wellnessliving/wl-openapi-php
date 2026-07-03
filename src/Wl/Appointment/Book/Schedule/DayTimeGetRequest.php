<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

class DayTimeGetRequest
{
    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The date to show the available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The duration of the asset booking or custom appointment duration in minutes. Zero in case of service
     * predefined duration.
     * In case of back-to-back booking - custom duration of first appointment.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * An index of the selected asset. `0` for booking of service or if asset is not on layout.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * The ID of the staff member's gender.
     * In case of back-to-back booking - staff gender of first appointment.
     * One of the {@link \WlSdk\AGenderSid} constants. `0` means no limitations on staff gender.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender_staff = null;

    /**
     * Determines whether multiple appointments are booked in back-to-back mode.
     *
     * @var bool|null
     */
    public ?bool $is_back_to_back = null;

    /**
     * `true` if the request is made by staff member; in this case booking policy restrictions are ignored.
     * `false` if the request is made by client; booking policy restrictions are applied.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only for the selected bookable tab.
     *
     * Cannot be set simultaneously with {DayTimeApi::$k_class_tab}.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * `true` - return service categories that have no staff members able to conduct them.
     * `false` - return only service categories that have staff members able to conduct them.
     *
     * @var bool|null
     */
    public ?bool $is_unavailable = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Current booking tab.
     * Only used for asset booking with "Allow clients to select a date and time, then the available asset" booking
     * policy enabled.
     *
     * Cannot be set simultaneously with {DayTimeApi::$is_tab_all}.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The resource key to show which days are available for booking.
     * Should be `0` in case of back-to-back booking.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The service key used for showing the available appointment booking schedule.
     * In case of back-to-back booking - service key of first appointment.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The staff member key used for showing the available appointment booking schedule.
     * In case of back-to-back booking - staff key of first appointment.
     * `0` means any available staff.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Key of timezone.
     *
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The staff key to show what days are available for booking.
     *
     * For back-to-back booking ([DayTimeApi::$is_back_to_back](/Wl/Appointment/Book/Schedule/DayTime.json) ==
     * `true`): array of appointments for back-to-back booking.
     * Converted to JSON string to be usable as model key. Each item is an array with next structure:
     *
     * @var string|null
     */
    public ?string $s_appointment = null;

    /**
     * A list of service add-ons keys(encoded as JSON string).
     * In case of back-to-back booking - add-ons of first appointment.
     *
     * @var string|null
     */
    public ?string $s_product = null;

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
     * The staff user key used for showing the available appointment booking schedule.
     * In case of back-to-back booking - staff user key of first appointment.
     * `0` means any available staff.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'dt_date' => $this->dt_date,
            'i_duration' => $this->i_duration,
            'i_index' => $this->i_index,
            'id_gender_staff' => $this->id_gender_staff,
            'is_back_to_back' => $this->is_back_to_back,
            'is_staff' => $this->is_staff,
            'is_tab_all' => $this->is_tab_all,
            'is_unavailable' => $this->is_unavailable,
            'is_walk_in' => $this->is_walk_in,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            'k_staff' => $this->k_staff,
            'k_timezone' => $this->k_timezone,
            's_appointment' => $this->s_appointment,
            's_product' => $this->s_product,
            'uid' => $this->uid,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
