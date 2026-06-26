<?php

namespace WlSdk\Wl\Business\Account\Subscription\Trial;

class TrialPutRequest
{
    /**
     * Type of the subscription. See {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract
     */
    public ?int $cid_subscription = null;

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
            'cid_subscription' => $this->cid_subscription,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
