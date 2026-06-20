<?php
namespace WlSdk\Core\Geo\Region;

/**
 * Response from GET
 */
class RegionGetResponse
{
    /**
     * No description.
     *
     * @var RegionGetResponseRegion[]|null
     */
    public ?array $a_region = null;

    public function __construct(array $data)
    {
        $this->a_region = isset($data['a_region']) ? array_map(static fn($item) => new RegionGetResponseRegion((array)$item), (array)$data['a_region']) : null;
    }
}
