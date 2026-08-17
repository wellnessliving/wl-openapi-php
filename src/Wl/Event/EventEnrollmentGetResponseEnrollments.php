<?php

namespace WlSdk\Wl\Event;

class EventEnrollmentGetResponseEnrollments
{
    /**
     * `true` if the client has a block event enrollment record set for this class
     *   (booked the whole event); `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_enrolled_full = null;

    /**
     * Key of the client who attended or will attend the event. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->is_enrolled_full = isset($data['is_enrolled_full']) ? (bool)$data['is_enrolled_full'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
