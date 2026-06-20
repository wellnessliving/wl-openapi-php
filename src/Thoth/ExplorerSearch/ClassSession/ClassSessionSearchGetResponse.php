<?php

namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

/**
 * Response from GET
 */
class ClassSessionSearchGetResponse
{
    /**
     * No description.
     *
     * @var ClassSessionSearchGetResponseClassSession[]|null
     */
    public ?array $a_class_session = null;

    public function __construct(array $data)
    {
        $this->a_class_session = isset($data['a_class_session']) ? array_map(static fn ($item) => new ClassSessionSearchGetResponseClassSession((array)$item), (array)$data['a_class_session']) : null;
    }
}
