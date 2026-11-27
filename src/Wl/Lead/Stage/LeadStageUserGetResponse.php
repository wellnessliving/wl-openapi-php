<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from GET
 */
class LeadStageUserGetResponse
{
    /**
     * Whether the current user may change the lead stage of the client.
     *
     * `true` if the user has the privilege to change the lead stage ({@link \WlSdk\Wl\Privilege\PrivilegeSid}) in
     * the business, or is an administrator of the client profiles. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_lead_stage_change = null;

    /**
     * Key of the lead stage.
     *
     * When the stage is set, the stage to move the client into. When the stage is read, the stage the client is in
     * now. A client without a stored stage, or with a stored stage which is not one of the stages of the business,
     * is
     * in the default stage of the business, the same stage as the profile of the client shows. An empty string
     * only if
     * the business has no stages.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    public function __construct(array $data)
    {
        $this->can_lead_stage_change = isset($data['can_lead_stage_change']) ? (bool)$data['can_lead_stage_change'] : null;
        $this->k_lead_stage = isset($data['k_lead_stage']) ? (string)$data['k_lead_stage'] : null;
    }
}
