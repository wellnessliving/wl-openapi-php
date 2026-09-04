<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageUserPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the client whose stage is set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of the lead stage to move the client into.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'k_lead_stage' => $this->k_lead_stage,
            ],
            static fn ($v) => $v !== null
        );
    }
}
