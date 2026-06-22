<?php

namespace WlSdk\Wl\Classes\ClassList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of classes and events.
     *
     * The result may depend on the following flags:
     * * `is_enrollment_block_all`
     * * `is_enrollment_block_empty`
     *
     * Each element has the following structure:
     *
     * @var ListGetResponseClass[]|null
     */
    public ?array $a_class = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? array_map(static fn ($item) => new ListGetResponseClass((array)$item), (array)$data['a_class']) : null;
    }
}
