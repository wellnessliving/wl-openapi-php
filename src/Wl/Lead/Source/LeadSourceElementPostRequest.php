<?php

namespace WlSdk\Wl\Lead\Source;

class LeadSourceElementPostRequest
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_lead_source = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_lead_source' => $this->a_lead_source,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
