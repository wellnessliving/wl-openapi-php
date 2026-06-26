<?php

namespace WlSdk\Wl\Zapier\LeadSource;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of Lead Sources. Each element has the next structure:
     *
     * @var ListGetResponseLeadSource|null
     */
    public ?ListGetResponseLeadSource $a_lead_source = null;

    public function __construct(array $data)
    {
        $this->a_lead_source = isset($data['a_lead_source']) ? new ListGetResponseLeadSource((array)$data['a_lead_source']) : null;
    }
}
