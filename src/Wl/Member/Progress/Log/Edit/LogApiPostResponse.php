<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

/**
 * Response from POST
 */
class LogApiPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? (array)$data['a_field_list'] : null;
    }
}
