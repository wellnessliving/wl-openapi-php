<?php

namespace WlSdk\Wl\Fitbuilder\Subscription;

class FitbuilderSubscriptionGetRequest
{
    /**
     * Business key to check Fitbuilder subscription plan.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
