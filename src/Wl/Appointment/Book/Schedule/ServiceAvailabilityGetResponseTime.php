<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

class ServiceAvailabilityGetResponseTime
{
    /**
     * Availability data of the staff. Keys are dates and values are lists of available appointment start times.
     *
     * @var string[][]|null
     */
    public ?array $a_availability = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Staff user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_availability = isset($data['a_availability']) ? (array)$data['a_availability'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
