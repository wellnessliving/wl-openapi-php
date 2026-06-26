<?php

namespace WlSdk\Wl\Business\Service;

/**
 * Response from GET
 */
class ServiceGetResponse
{
    /**
     * Business service availability.
     *
     * Array where keys are service IDs (see {@link \WlSdk\RsServiceSid})
     *     and values are `true` if the service is available for the business and `false` otherwise.
     *
     * @var int[]|null
     */
    public ?array $a_services_enabled = null;

    public function __construct(array $data)
    {
        $this->a_services_enabled = isset($data['a_services_enabled']) ? (array)$data['a_services_enabled'] : null;
    }
}
