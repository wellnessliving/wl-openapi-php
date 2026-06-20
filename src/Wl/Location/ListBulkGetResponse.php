<?php
namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class ListBulkGetResponse
{
    /**
     * Short-form information about locations.
     * 
     * Keys refer to location primary keys. Values refer to sub-arrays with the next keys:
     *
     * @var ListBulkGetResponseLocation|null
     */
    public ?ListBulkGetResponseLocation $a_location = null;

    /**
     * A list of models with full information about each location.
     *
     * @var ListBulkGetResponseLocationFull[]|null
     */
    public ?array $a_location_full = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? new ListBulkGetResponseLocation((array)$data['a_location']) : null;
        $this->a_location_full = isset($data['a_location_full']) ? array_map(static fn($item) => new ListBulkGetResponseLocationFull((array)$item), (array)$data['a_location_full']) : null;
    }
}
