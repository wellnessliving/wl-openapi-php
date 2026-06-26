<?php

namespace WlSdk\Wl\Quiz;

/**
 * Response from GET
 */
class ServiceListGetResponse
{
    /**
     * List of services.
     *
     * @var array|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
    }
}
