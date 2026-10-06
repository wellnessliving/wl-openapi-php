<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageElementGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_lead_stage' => $this->k_lead_stage,
            ],
            static fn ($v) => $v !== null
        );
    }
}
