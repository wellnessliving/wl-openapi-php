<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Service key. If set, only the codes that are applied to this service by default are returned.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
