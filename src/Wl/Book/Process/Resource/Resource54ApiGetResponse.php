<?php
namespace WlSdk\Wl\Book\Process\Resource;

/**
 * Response from GET
 */
class Resource54ApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_resource_all = null;

    public function __construct(array $data)
    {
        $this->a_resource_all = isset($data['a_resource_all']) ? (array)$data['a_resource_all'] : null;
    }
}
