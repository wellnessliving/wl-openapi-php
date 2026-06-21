<?php

namespace WlSdk\Core\Sid;

/**
 * Response from GET
 */
class CoreSidGetResponse
{
    /**
     * List of items. Keys are IDs, values are arrays with additional information:
     *
     * @var CoreSidGetResponseList|null
     */
    public ?CoreSidGetResponseList $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new CoreSidGetResponseList((array)$data['a_list']) : null;
    }
}
