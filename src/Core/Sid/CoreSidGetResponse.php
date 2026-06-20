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
     * @var CoreSidGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn($item) => new CoreSidGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
