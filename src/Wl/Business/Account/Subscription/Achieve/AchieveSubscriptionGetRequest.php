<?php
namespace WlSdk\Wl\Business\Account\Subscription\Achieve;

class AchieveSubscriptionGetRequest
{
    /**
     * Business key to check Achieve app subscription plan.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
