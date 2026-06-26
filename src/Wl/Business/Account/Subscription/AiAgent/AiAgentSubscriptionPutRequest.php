<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

class AiAgentSubscriptionPutRequest
{
    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Type of the upgrade. One of {@link \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid
     */
    public ?int $id_upgrade = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_upgrade' => $this->id_upgrade,
            ],
            static fn ($v) => $v !== null
        );
    }
}
