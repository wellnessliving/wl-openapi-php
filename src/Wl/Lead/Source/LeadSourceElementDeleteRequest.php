<?php

namespace WlSdk\Wl\Lead\Source;

class LeadSourceElementDeleteRequest
{
    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source_replace = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_lead_source_replace' => $this->k_lead_source_replace,
            'k_business' => $this->k_business,
            'k_lead_source' => $this->k_lead_source,
            ],
            static fn ($v) => $v !== null
        );
    }
}
