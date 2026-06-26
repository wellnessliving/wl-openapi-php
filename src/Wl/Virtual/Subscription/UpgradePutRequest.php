<?php

namespace WlSdk\Wl\Virtual\Subscription;

class UpgradePutRequest
{
    /**
     * Business key.
     *
     * `null` if not specified yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Number of licenses that should be added to current subscription.
     * If current subscription is inactive it will be activated with given number of licenses.
     *
     * @var int|null
     */
    public ?int $i_license = null;

    /**
     * New subscription plan. One of {@link \WlSdk\Wl\Business\Account\Subscription\Fitlive\FitliveSubscriptionSid}
     * constants.
     *
     * `null` if not defined yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Fitlive\FitliveSubscriptionSid
     */
    public ?int $id_plan = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'i_license' => $this->i_license,
            'id_plan' => $this->id_plan,
            ],
            static fn ($v) => $v !== null
        );
    }
}
