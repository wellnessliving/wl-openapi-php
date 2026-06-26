<?php

namespace WlSdk\Wl\Business\Account\Subscription\Eml;

class EmlSubscriptionDeleteRequest
{
    /**
     * CID of one of {@link \WlSdk\Wl\Business\Account\Subscription\Eml\EmlSubscriptionAbstract} subscriptions.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Eml\EmlSubscriptionAbstract
     */
    public ?int $cid_subscription = null;

    /**
     * Business key. Primary key in RsBusinessSql.
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
