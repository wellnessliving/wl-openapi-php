<?php

namespace WlSdk\Core\Geo;

/**
 * Response from GET
 */
class GeoTimezoneGetResponse
{
    /**
     * Timezone key. `null` if can't determine.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    public function __construct(array $data)
    {
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
    }
}
