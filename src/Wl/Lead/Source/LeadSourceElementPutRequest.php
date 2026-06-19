<?php
namespace WlSdk\Wl\Lead\Source;

class LeadSourceElementPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Name of new lead source item.
     *
     * @var string|null
     */
    public ?string $text_lead_source = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_lead_source' => $this->text_lead_source,
            ],
            static fn($v) => $v !== null
        );
    }
}
