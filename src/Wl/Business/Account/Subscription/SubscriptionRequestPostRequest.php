<?php

namespace WlSdk\Wl\Business\Account\Subscription;

class SubscriptionRequestPostRequest
{
    /**
     * CID of the subscription for which the request is made.
     *
     * @var int|null
     */
    public ?int $cid_subscription = null;

    /**
     * ID of the subscription plan requested by business.
     *
     * @var int|null
     */
    public ?int $id_plan = null;

    /**
     * The business key within which request is made.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_subscription' => $this->cid_subscription,
            'id_plan' => $this->id_plan,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
