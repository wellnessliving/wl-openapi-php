<?php

namespace WlSdk\Wl\Book\Process\Resource;

/**
 * Response from GET
 */
class ResourceGetResponse
{
    /**
     * No description.
     *
     * @var ResourceGetResponseResourceAll[]|null
     */
    public ?array $a_resource_all = null;

    public function __construct(array $data)
    {
        $this->a_resource_all = isset($data['a_resource_all']) ? array_map(static fn ($item) => new ResourceGetResponseResourceAll((array)$item), (array)$data['a_resource_all']) : null;
    }
}
