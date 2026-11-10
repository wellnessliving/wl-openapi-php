<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListSessionUser
{
    /**
     * Date and time of the session in UTC, in `MySQL` format (for example `2026-11-05 13:00:00`).
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * `true` if the user is on the wait list of the session ({@link \WlSdk\Wl\Visit\VisitSid}).
     * `false` if the user holds an active visit of the session ({@link \WlSdk\Wl\Visit\VisitSid}, {@link
     * \WlSdk\Wl\Visit\VisitSid} or
     *  {@link \WlSdk\Wl\Visit\VisitSid}).
     *
     * @var bool|null
     */
    public ?bool $is_user_wait = null;

    /**
     * Key of the class period of the session.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function __construct(array $data)
    {
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->is_user_wait = isset($data['is_user_wait']) ? (bool)$data['is_user_wait'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
    }
}
