<?php

namespace WlSdk\Wl\Event;

/**
 * Response from GET
 */
class EventEnrollmentGetResponse
{
    /**
     * A list of clients enrolled in the specified event classes.
     *
     * Key is the class key.
     *
     * Value is a list of clients enrolled in that class. Each element contains:
     *
     * @var EventEnrollmentGetResponseEnrollments[]|null
     */
    public ?array $a_enrollments = null;

    public function __construct(array $data)
    {
        $this->a_enrollments = isset($data['a_enrollments']) ? array_map(static fn ($item) => new EventEnrollmentGetResponseEnrollments((array)$item), (array)$data['a_enrollments']) : null;
    }
}
