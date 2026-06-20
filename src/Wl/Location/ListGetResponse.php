<?php
namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var ListGetResponseLocation[]|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? array_map(static fn($item) => new ListGetResponseLocation((array)$item), (array)$data['a_location']) : null;
    }
}
