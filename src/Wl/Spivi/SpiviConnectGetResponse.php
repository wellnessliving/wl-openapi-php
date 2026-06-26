<?php

namespace WlSdk\Wl\Spivi;

/**
 * Response from GET
 */
class SpiviConnectGetResponse
{
    /**
     * Facility ID.
     *
     * @var string|null
     */
    public ?string $s_facility_id = null;

    /**
     * Username.
     *
     * @var string|null
     */
    public ?string $s_username = null;

    public function __construct(array $data)
    {
        $this->s_facility_id = isset($data['s_facility_id']) ? (string)$data['s_facility_id'] : null;
        $this->s_username = isset($data['s_username']) ? (string)$data['s_username'] : null;
    }
}
