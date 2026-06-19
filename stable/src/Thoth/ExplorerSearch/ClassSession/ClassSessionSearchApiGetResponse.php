<?php
namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

/**
 * Response from GET
 */
class ClassSessionSearchApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_class_session = null;

    public function __construct(array $data)
    {
        $this->a_class_session = isset($data['a_class_session']) ? (array)$data['a_class_session'] : null;
    }
}
