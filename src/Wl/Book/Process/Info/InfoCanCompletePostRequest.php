<?php

namespace WlSdk\Wl\Book\Process\Info;

class InfoCanCompletePostRequest
{
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

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_session_select_post = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'uid' => $this->uid,
            'a_session_select_post' => $this->a_session_select_post,
            ],
            static fn ($v) => $v !== null
        );
    }
}
