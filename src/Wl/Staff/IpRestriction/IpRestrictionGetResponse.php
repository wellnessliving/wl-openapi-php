<?php

namespace WlSdk\Wl\Staff\IpRestriction;

/**
 * Response from GET
 */
class IpRestrictionGetResponse
{
    /**
     * Indicates if the logged-in user's IP is allowed by the passed list of IP restrictions.
     *
     * @var bool|null
     */
    public ?bool $is_user_ip_allowed = null;

    public function __construct(array $data)
    {
        $this->is_user_ip_allowed = isset($data['is_user_ip_allowed']) ? (bool)$data['is_user_ip_allowed'] : null;
    }
}
