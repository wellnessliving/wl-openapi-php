<?php

namespace WlSdk\Wl\Business\Account\Application;

class ApplicationPostRequest
{
    /**
     * Application package ID. One of {@link \WlSdk\Wl\Business\Account\ApplicationSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\ApplicationSid
     */
    public ?int $id_application = null;

    /**
     * Achieve subscription plan ID.
     * One of {@link \WlSdk\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid
     */
    public ?int $id_plan = null;

    /**
     * Business key. Primary key from the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_application' => $this->id_application,
            'id_plan' => $this->id_plan,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
