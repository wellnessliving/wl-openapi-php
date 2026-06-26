<?php

namespace WlSdk\Wl\Business\Account\Subscription\Eml;

class EmlSubscriptionPutRequest
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

    /**
     * New subscription plan. One of {@link \WlSdk\Wl\Business\Account\Subscription\Eml\EmlSubscriptionAbstract}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Eml\EmlSubscriptionAbstract
     */
    public ?int $id_plan = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_subscription' => $this->cid_subscription,
            'k_business' => $this->k_business,
            'id_plan' => $this->id_plan,
            ],
            static fn ($v) => $v !== null
        );
    }
}
