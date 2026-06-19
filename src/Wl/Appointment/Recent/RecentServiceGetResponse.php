<?php
namespace WlSdk\Wl\Appointment\Recent;

/**
 * Response from GET
 */
class RecentServiceGetResponse
{
    /**
     * List of last booked services.
     *
     * @var string[]|null
     */
    public ?array $a_service_last = null;

    public function __construct(array $data)
    {
        $this->a_service_last = isset($data['a_service_last']) ? (array)$data['a_service_last'] : null;
    }
}
