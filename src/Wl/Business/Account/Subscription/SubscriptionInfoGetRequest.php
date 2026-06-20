<?php
namespace WlSdk\Wl\Business\Account\Subscription;

class SubscriptionInfoGetRequest
{
    /**
     * CID of the subscription information of which is requested.
     *
     * @var \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract|null
     */
    public ?\WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract $cid_subscription = null;

    /**
     * Business key for which subscription information is requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_subscription' => $this->cid_subscription?->value,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
