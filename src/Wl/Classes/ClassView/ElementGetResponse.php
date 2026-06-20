<?php
namespace WlSdk\Wl\Classes\ClassView;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * No description.
     *
     * @var ElementGetResponseClassList[]|null
     */
    public ?array $a_class_list = null;

    public function __construct(array $data)
    {
        $this->a_class_list = isset($data['a_class_list']) ? array_map(static fn($item) => new ElementGetResponseClassList((array)$item), (array)$data['a_class_list']) : null;
    }
}
