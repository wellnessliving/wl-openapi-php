<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

/**
 * Response from GET
 */
class AssetLocationGetResponse
{
    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
