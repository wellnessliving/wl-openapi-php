<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageManagerPostRequest
{
    /**
     * Key of the Enterprise Headquarters business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Who manages the lead stages of the locations of the Enterprise. One of {@link
     * \WlSdk\Wl\Lead\Stage\LeadStageManagerSid} constants.
     *
     * {@link \WlSdk\Wl\Lead\Stage\LeadStageManagerSid} by default.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageManagerSid
     */
    public ?int $id_lead_stage_manager = 1;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_lead_stage_manager' => $this->id_lead_stage_manager,
            ],
            static fn ($v) => $v !== null
        );
    }
}
