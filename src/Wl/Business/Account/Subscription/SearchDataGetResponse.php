<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Response from GET
 */
class SearchDataGetResponse
{
    /**
     * Subscription statuses.
     *
     * @var array|null
     */
    public ?array $a_subscription_status = null;

    public function __construct(array $data)
    {
        $this->a_subscription_status = isset($data['a_subscription_status']) ? (array)$data['a_subscription_status'] : null;
    }
}
