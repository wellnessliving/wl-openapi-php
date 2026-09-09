<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from GET
 */
class LeadStageListGetResponse
{
    /**
     * List of lead stages of the business. Ordered by `i_order`.
     *
     * @var LeadStageListGetResponseLeadStage[]|null
     */
    public ?array $a_lead_stage = null;

    public function __construct(array $data)
    {
        $this->a_lead_stage = isset($data['a_lead_stage']) ? array_map(static fn ($item) => new LeadStageListGetResponseLeadStage((array)$item), (array)$data['a_lead_stage']) : null;
    }
}
