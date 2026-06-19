<?php
namespace WlSdk\Wl\Business\Account\Subscription\Achieve;

/**
 * Response from GET
 */
class AchieveSubscriptionApiGetResponse
{
    /**
     * If Achieve app has free subscription plan is `true`, otherwise (white label, professional) - `false`.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * If Achieve app has white label subscription plan is `true`, otherwise (free, professional) - `false`.
     *
     * @var bool|null
     */
    public ?bool $is_white_label = null;

    public function __construct(array $data)
    {
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_white_label = isset($data['is_white_label']) ? (bool)$data['is_white_label'] : null;
    }
}
