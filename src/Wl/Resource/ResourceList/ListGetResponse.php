<?php
namespace WlSdk\Wl\Resource\ResourceList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var ListGetResponseResource[]|null
     */
    public ?array $a_resource = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? array_map(static fn($item) => new ListGetResponseResource((array)$item), (array)$data['a_resource']) : null;
    }
}
