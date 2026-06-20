<?php
namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

/**
 * Response from GET
 */
class ClassSessionSearchGetResponse
{
    /**
     * List of found class sessions.
     * 
     * Each item is an associative array with the following structure:
     *
     * @var ClassSessionSearchGetResponseClassSession|null
     */
    public ?ClassSessionSearchGetResponseClassSession $a_class_session = null;

    public function __construct(array $data)
    {
        $this->a_class_session = isset($data['a_class_session']) ? new ClassSessionSearchGetResponseClassSession((array)$data['a_class_session']) : null;
    }
}
