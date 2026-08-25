<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

/**
 * Response from GET
 */
class ServiceAvailabilityGetResponse
{
    /**
     * An array with a schedule of available appointment booking times.
     *
     * Each record contains availability data of one staff and have next structure:
     *
     * @var ServiceAvailabilityGetResponseTime|null
     */
    public ?ServiceAvailabilityGetResponseTime $a_time = null;

    public function __construct(array $data)
    {
        $this->a_time = isset($data['a_time']) ? new ServiceAvailabilityGetResponseTime((array)$data['a_time']) : null;
    }
}
