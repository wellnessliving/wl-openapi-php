<?php
namespace WlSdk\Wl\Classes\ClassList;

/**
 * Response from GET
 */
class ListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_class = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? (array)$data['a_class'] : null;
    }
}
