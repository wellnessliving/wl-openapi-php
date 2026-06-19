<?php
namespace WlSdk\Wl\Lead\Source;

/**
 * Response from PUT
 */
class LeadSourceElementApiPutResponse
{
    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    public function __construct(array $data)
    {
        $this->k_lead_source = isset($data['k_lead_source']) ? (string)$data['k_lead_source'] : null;
    }
}
