<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageImpactGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the lead stage to move the client into.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    /**
     * Key of the client who is moved.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_lead_stage' => $this->k_lead_stage,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
