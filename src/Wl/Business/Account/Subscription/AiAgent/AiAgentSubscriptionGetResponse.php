<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

/**
 * Response from GET
 */
class AiAgentSubscriptionGetResponse
{
    /**
     * Returns available discount months for the business.
     *
     * `0` if discount is not available.
     *
     * @var int|null
     */
    public ?int $i_discount_available = null;

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

    public function __construct(array $data)
    {
        $this->i_discount_available = isset($data['i_discount_available']) ? (int)$data['i_discount_available'] : null;
        $this->i_trial_available = isset($data['i_trial_available']) ? (int)$data['i_trial_available'] : null;
        $this->i_trial_left = isset($data['i_trial_left']) ? (int)$data['i_trial_left'] : null;
    }
}
