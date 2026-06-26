<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

class MarketingSuiteSubscriptionPostRequest
{
    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * New subscription plan. One of {@link
     * \WlSdk\Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscriptionSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscriptionSid
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
