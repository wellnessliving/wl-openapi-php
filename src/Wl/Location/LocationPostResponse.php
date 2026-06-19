<?php
namespace WlSdk\Wl\Location;

/**
 * Response from POST
 */
class LocationPostResponse
{
    /**
     * The key of the location.
     * This will be `null` if it's being used to create a new location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
