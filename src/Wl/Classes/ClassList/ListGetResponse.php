<?php
namespace WlSdk\Wl\Classes\ClassList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var ListGetResponseClass[]|null
     */
    public ?array $a_class = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? array_map(static fn($item) => new ListGetResponseClass((array)$item), (array)$data['a_class']) : null;
    }
}
