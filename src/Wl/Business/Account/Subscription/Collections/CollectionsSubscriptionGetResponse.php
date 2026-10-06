<?php

namespace WlSdk\Wl\Business\Account\Subscription\Collections;

/**
 * Response from GET
 */
class CollectionsSubscriptionGetResponse
{
    /**
     * If the business has active subscription.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function __construct(array $data)
    {
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
    }
}
