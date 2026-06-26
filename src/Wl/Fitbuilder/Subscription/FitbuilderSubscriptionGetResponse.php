<?php

namespace WlSdk\Wl\Fitbuilder\Subscription;

/**
 * Response from GET
 */
class FitbuilderSubscriptionGetResponse
{
    /**
     * If Fitbuilder has free subscription plan is `true`, otherwise - `false`.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    public function __construct(array $data)
    {
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
    }
}
