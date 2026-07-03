<?php

namespace WlSdk\Wl\Lead;

/**
 * Response from POST
 */
class LeadCheckPostResponse
{
    /**
     * `true` if user with specified email is lead of a specified business, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_lead = null;

    /**
     * `true` if user with specified email is a member of a specified business, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_member = null;

    public function __construct(array $data)
    {
        $this->is_lead = isset($data['is_lead']) ? (bool)$data['is_lead'] : null;
        $this->is_member = isset($data['is_member']) ? (bool)$data['is_member'] : null;
    }
}
