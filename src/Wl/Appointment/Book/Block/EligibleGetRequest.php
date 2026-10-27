<?php

namespace WlSdk\Wl\Appointment\Book\Block;

class EligibleGetRequest
{
    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Whether a staff member books for the client. `false` if the client books.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Keys of the selected add-ons of the appointment, in JSON.
     *
     * For example `["12","34"]`. An empty string or an empty list if the appointment is booked without add-ons.
     * The
     * add-ons are services that are linked to the appointment as its add-ons. They run after the appointment, and
     * the
     * staff member of the appointment conducts them.
     *
     * @var string|null
     */
    public ?string $json_service_addon = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the appointment to which the add-ons are added.
     *
     * @var string|null
     */
    public ?string $k_service = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'is_staff' => $this->is_staff,
            'is_walk_in' => $this->is_walk_in,
            'json_service_addon' => $this->json_service_addon,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
