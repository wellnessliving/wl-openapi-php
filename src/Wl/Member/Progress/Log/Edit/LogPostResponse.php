<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

/**
 * Response from POST
 */
class LogPostResponse
{
    /**
     * Field log data.
     *
     * @var LogPostResponseFieldList[]|null
     */
    public ?array $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? array_map(static fn($item) => new LogPostResponseFieldList((array)$item), (array)$data['a_field_list']) : null;
    }
}
