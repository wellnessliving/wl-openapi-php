<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from PUT
 */
class LeadStageElementPutResponse
{
    /**
     * Key of the lead stage.
     *
     * @var string|null
     */
    public ?string $k_lead_stage = null;

    public function __construct(array $data)
    {
        $this->k_lead_stage = isset($data['k_lead_stage']) ? (string)$data['k_lead_stage'] : null;
    }
}
