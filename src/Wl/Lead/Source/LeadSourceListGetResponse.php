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
     * @var array[]|null
     */
    public ?array $a_lead_source = null;

    public function __construct(array $data)
    {
        $this->a_lead_source = isset($data['a_lead_source']) ? (array)$data['a_lead_source'] : null;
    }
}
