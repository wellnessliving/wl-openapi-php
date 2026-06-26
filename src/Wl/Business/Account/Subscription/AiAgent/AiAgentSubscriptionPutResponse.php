<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

/**
 * Response from PUT
 */
class AiAgentSubscriptionPutResponse
{
    /**
     * Discount extension option applied to the subscription during upgrade.
     *
     * @var array|null
     */
    public ?array $a_discount_extend = null;

    public function __construct(array $data)
    {
        $this->a_discount_extend = isset($data['a_discount_extend']) ? (array)$data['a_discount_extend'] : null;
    }
}
