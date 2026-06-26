<?php

namespace WlSdk\Wl\Business\Sms\TwoWaySms\Index;

class UpgradePutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * New subscription plan. One of {@link \WlSdk\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid
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
