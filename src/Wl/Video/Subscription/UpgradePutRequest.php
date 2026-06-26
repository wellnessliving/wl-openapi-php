<?php

namespace WlSdk\Wl\Video\Subscription;

class UpgradePutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * New subscription plan. One of {@link \WlSdk\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid
     */
    public ?int $id_plan = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_plan' => $this->id_plan,
            ],
            static fn ($v) => $v !== null
        );
    }
}
