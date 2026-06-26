<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

/**
 * Response from GET
 */
class MarketingSuiteSubscriptionGetResponse
{
    /**
     * Returns available trial days for the business.
     *
     * `0` if trial is not available.
     *
     * @var int|null
     */
    public ?int $i_trial_available = null;

    /**
     * Returns available trial days for the business.
     *
     * `0` if trial is not available.
     *
     * @var int|null
     */
    public ?int $i_trial_left = null;

    /**
     * If the business has active subscription.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * If the subscription is free. Calculated as price monthly equals to zero.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * If the business has trial period at this moment.
     *
     * @var bool|null
     */
    public ?bool $is_trial = null;

    public function __construct(array $data)
    {
        $this->i_trial_available = isset($data['i_trial_available']) ? (int)$data['i_trial_available'] : null;
        $this->i_trial_left = isset($data['i_trial_left']) ? (int)$data['i_trial_left'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_trial = isset($data['is_trial']) ? (bool)$data['is_trial'] : null;
    }
}
