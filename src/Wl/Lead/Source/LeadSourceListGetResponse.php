<?php
namespace WlSdk\Wl\Lead\Source;

/**
 * Response from GET
 */
class LeadSourceListGetResponse
{
    /**
     * No description.
     *
     * @var LeadSourceListGetResponseLeadSource[]|null
     */
    public ?array $a_lead_source = null;

    public function __construct(array $data)
    {
        $this->a_lead_source = isset($data['a_lead_source']) ? array_map(static fn($item) => new LeadSourceListGetResponseLeadSource((array)$item), (array)$data['a_lead_source']) : null;
    }
}
