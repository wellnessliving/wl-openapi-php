<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Response from GET
 */
class SubscriptionInfoGetResponse
{
    /**
     * Locale ID of the business which subscription information is requested for.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * Currently active plan ID for requested subscription.
     *
     * Depending on subscription type constant from one of {@link \WlSdk\Wl\Business\Account\Subscription\PlanSid}
     * inheritors.
     *
     * @var int|null
     */
    public $id_plan = null;

    /**
     * Whether subscription is active.
     *
     * `true` if subscription is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function __construct(array $data)
    {
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->id_plan = $data['id_plan'] ?? null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
    }
}
