<?php

namespace WlSdk\Wl\Classes\ClassView;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * Displays information about the class schedule(s). Each element has the next structure:
     *
     * @var ElementGetResponseClassList[]|null
     */
    public ?array $a_class_list = null;

    public function __construct(array $data)
    {
        $this->a_class_list = isset($data['a_class_list']) ? array_map(static fn ($item) => new ElementGetResponseClassList((array)$item), (array)$data['a_class_list']) : null;
    }
}
