<?php

namespace WlSdk\Wl\Member\Group;

/**
 * Response from GET
 */
class GroupTemporaryGetResponse
{
    /**
     * `true` if there are no clients is the quick group; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    public function __construct(array $data)
    {
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
    }
}
