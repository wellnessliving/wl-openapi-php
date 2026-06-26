<?php

namespace WlSdk\Wl\ClassPass;

class AppointmentEditPostRequest
{
    /**
     * Partner ID.
     *
     * @var string|null
     */
    public ?string $s_partner_id = null;

    /**
     * Venue ID.
     *
     * @var string|null
     */
    public ?string $s_venue_id = null;

    /**
     * List of bookable slots.
     *
     * @var array[]|null
     */
    public ?array $a_book = null;

    /**
     * Date and time of the reservation in venue locale.
     *
     * This is an ISO format of the local date: _[date]T[time]_
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * User for which reservation should be performed.
     *
     * @var array|null
     */
    public ?array $o_user = null;

    /**
     * Service ID to be reserved.
     *
     * @var string|null
     */
    public ?string $s_service_id = null;

    /**
     * Some custom string for any additional information.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            's_partner_id' => $this->s_partner_id,
            's_venue_id' => $this->s_venue_id,
            'a_book' => $this->a_book,
            'dtl_date' => $this->dtl_date,
            'o_user' => $this->o_user,
            's_service_id' => $this->s_service_id,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
