<?php

namespace WlSdk\Wl\ClassPass;

class AvailabilityListGetResponseAvailabilityDiscrete
{
    /**
     * No description.
     *
     * @var string[]|null
     */
    public ?array $a_time = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    public function __construct(array $data)
    {
        $this->a_time = isset($data['a_time']) ? (array)$data['a_time'] : null;
        $this->dl_date = isset($data['dl_date']) ? (string)$data['dl_date'] : null;
    }
}
