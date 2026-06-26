<?php

namespace WlSdk\Wl\Staff\Edit;

/**
 * Response from GET
 */
class ActiveServicesGetResponse
{
    /**
     * `true` if staff member has any scheduled services, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_active_services = null;

    public function __construct(array $data)
    {
        $this->has_active_services = isset($data['has_active_services']) ? (bool)$data['has_active_services'] : null;
    }
}
