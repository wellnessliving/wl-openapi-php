<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Subscription;

class SubscriptionPutRequest
{
    /**
     * Subscription plan that should be activated.
     *
     * @var int|null
     */
    public ?int $id_plan = null;

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
            'id_plan' => $this->id_plan,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
