<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageElementDeleteRequest
{
    /**
     * Key of the lead stage to move leads and clients of the deleted stage to.
     *
     * Required if the stage being deleted has leads or clients assigned to it. Ignored otherwise.
     * The replacement stage must be of the same {@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid} as the deleted one.
     *
     * @var string|null
     */
    public ?string $k_lead_stage_replace = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the lead stage.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_lead_stage_replace' => $this->k_lead_stage_replace,
            'k_business' => $this->k_business,
            'k_lead_stage' => $this->k_lead_stage,
            ],
            static fn ($v) => $v !== null
        );
    }
}
