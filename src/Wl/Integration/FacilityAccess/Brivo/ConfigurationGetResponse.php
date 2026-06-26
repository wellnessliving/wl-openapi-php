<?php

namespace WlSdk\Wl\Integration\FacilityAccess\Brivo;

/**
 * Response from GET
 */
class ConfigurationGetResponse
{
    /**
     * Represents if Brivo integration is enabled, and business has configured Facility Access.
     *
     * @var bool|null
     */
    public ?bool $is_brivo_enabled = null;

    /**
     * Represents if Brivo feature of users invitation is enabled. Depends on `is_brivo_enabled` too.
     *
     * @var bool|null
     */
    public ?bool $is_brivo_invitation_enabled = null;

    public function __construct(array $data)
    {
        $this->is_brivo_enabled = isset($data['is_brivo_enabled']) ? (bool)$data['is_brivo_enabled'] : null;
        $this->is_brivo_invitation_enabled = isset($data['is_brivo_invitation_enabled']) ? (bool)$data['is_brivo_invitation_enabled'] : null;
    }
}
