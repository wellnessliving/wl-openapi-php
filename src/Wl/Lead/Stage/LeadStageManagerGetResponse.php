<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from GET
 */
class LeadStageManagerGetResponse
{
    /**
     * Who manages the lead stages of the locations of the Enterprise. One of {@link
     * \WlSdk\Wl\Lead\Stage\LeadStageManagerSid} constants.
     *
     * {@link \WlSdk\Wl\Lead\Stage\LeadStageManagerSid} by default.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageManagerSid
     */
    public ?int $id_lead_stage_manager = null;

    public function __construct(array $data)
    {
        $this->id_lead_stage_manager = isset($data['id_lead_stage_manager']) ? (int)$data['id_lead_stage_manager'] : null;
    }
}
