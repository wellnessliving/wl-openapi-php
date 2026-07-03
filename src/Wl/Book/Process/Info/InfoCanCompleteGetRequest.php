<?php

namespace WlSdk\Wl\Book\Process\Info;

class InfoCanCompleteGetRequest
{
    /**
     * A list of sessions of an event that can be booked together.
     *
     * This is the same as
     * [InfoCanCompleteApi::$a_session_select_post](/Wl/Book/Process/Info/InfoCanComplete.json), but limited by
     * query string
     * length and might fail if the user is booking more than 50 sessions at once.
     * Therefore, using the POST method is preferable.
     *
     * @var array[]|null
     */
    public ?array $a_session_select = null;

    /**
     * The date and time of the session that the user is booking, returned in MySQL format and in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * Key of the business in which the booking is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period ID that the user started to book.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The unique booking process key.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The key of a user who is making the booking.
     * Empty if user is a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_session_select' => $this->a_session_select,
            'dt_date_gmt' => $this->dt_date_gmt,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
