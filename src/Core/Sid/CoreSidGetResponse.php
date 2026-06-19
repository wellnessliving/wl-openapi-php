<?php
namespace WlSdk\Core\Sid;

/**
 * Response from GET
 */
class CoreSidGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
