<?php

namespace WlSdk\Wl\Lead;

class LeadGetRequest
{
    /**
     * The key of business to which the new user must be captured.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the widget skin. If left empty, then the default skin is used.
     * This will be the Lead Capture widget skin with "Use this widget for the Add Lead form" selected.
     * If your business doesn't have a skin selected, this endpoint will default to the system-wide default,
     * which may lack fields your business requires when adding a lead or a client.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
