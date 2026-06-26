<?php

namespace WlSdk\Wl\Business\Policy;

/**
 * Response from GET
 */
class CancelPolicyServiceGetResponse
{
    /**
     * Whether all services are selected.
     *
     * `null` if not initialized yet.
     *
     * @var bool|null
     */
    public ?bool $is_all_service_selected = null;

    /**
     * Services data. For details see `a_service_all`.
     *
     * @var string|null
     */
    public ?string $json_service_all = null;

    public function __construct(array $data)
    {
        $this->is_all_service_selected = isset($data['is_all_service_selected']) ? (bool)$data['is_all_service_selected'] : null;
        $this->json_service_all = isset($data['json_service_all']) ? (string)$data['json_service_all'] : null;
    }
}
