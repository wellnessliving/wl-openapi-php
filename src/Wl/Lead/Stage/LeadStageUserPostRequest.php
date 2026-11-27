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
     * Key of the client whose stage is read or set.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
