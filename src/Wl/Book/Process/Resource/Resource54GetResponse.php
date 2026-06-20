<?php

namespace WlSdk\Wl\Book\Process\Resource;

/**
 * Response from GET
 */
class Resource54GetResponse
{
    /**
     * No description.
     *
     * @var Resource54GetResponseResourceAll[]|null
     */
    public ?array $a_resource_all = null;

    public function __construct(array $data)
    {
        $this->a_resource_all = isset($data['a_resource_all']) ? array_map(static fn ($item) => new Resource54GetResponseResourceAll((array)$item), (array)$data['a_resource_all']) : null;
    }
}
