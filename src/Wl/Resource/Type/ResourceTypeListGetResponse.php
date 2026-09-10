<?php

namespace WlSdk\Wl\Resource\Type;

/**
 * Response from GET
 */
class ResourceTypeListGetResponse
{
    /**
     * Resource type list:
     *
     * @var ResourceTypeListGetResponseResourceType[]|null
     */
    public ?array $a_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_resource_type = isset($data['a_resource_type']) ? array_map(static fn ($item) => new ResourceTypeListGetResponseResourceType((array)$item), (array)$data['a_resource_type']) : null;
    }
}
