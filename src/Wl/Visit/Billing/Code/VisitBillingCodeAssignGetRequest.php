<?php

namespace WlSdk\Wl\Visit\Billing\Code;

class VisitBillingCodeAssignGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
