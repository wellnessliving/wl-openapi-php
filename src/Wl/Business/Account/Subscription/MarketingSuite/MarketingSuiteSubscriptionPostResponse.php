<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

/**
 * Response from POST
 */
class MarketingSuiteSubscriptionPostResponse
{
    /**
     * Type of the upgrade. One of {@link \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid
     */
    public ?int $id_upgrade = null;

    public function __construct(array $data)
    {
        $this->id_upgrade = isset($data['id_upgrade']) ? (int)$data['id_upgrade'] : null;
    }
}
