<?php
namespace WlSdk\Wl\Classes\ClassView;

/**
 * Response from GET
 */
class ElementApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_class_list = null;

    public function __construct(array $data)
    {
        $this->a_class_list = isset($data['a_class_list']) ? (array)$data['a_class_list'] : null;
    }
}
