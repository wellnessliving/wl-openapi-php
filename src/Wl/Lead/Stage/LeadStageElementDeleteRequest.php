<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageElementDeleteRequest
{
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

    /**
     * Key of the lead stage to move leads and clients of the deleted stage to.
     *
     * Required if the stage being deleted has leads or clients assigned to it. Ignored otherwise.
     * The replacement stage must be of the same {@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid} as the deleted one.
     *
     * @var string|null
     */
    public ?string $k_lead_stage_replace = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_lead_stage' => $this->k_lead_stage,
            'k_lead_stage_replace' => $this->k_lead_stage_replace,
            ],
            static fn ($v) => $v !== null
        );
    }
}
