<?php

namespace WlSdk\Wl\Business\Franchise\Member;

/**
 * Response from PUT
 */
class FranchiseMemberPutResponse
{
    /**
     * Checks if client has any required fields to be completed.
     *
     * @var bool|null
     */
    public ?bool $is_empty_required_fields = null;

    public function __construct(array $data)
    {
        $this->is_empty_required_fields = isset($data['is_empty_required_fields']) ? (bool)$data['is_empty_required_fields'] : null;
    }
}
