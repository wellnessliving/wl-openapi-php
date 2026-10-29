<?php

namespace WlSdk\Wl\Appointment\Book\Block;

class AddonListGetRequest
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
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the appointment for which the add-ons are chosen.
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
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
