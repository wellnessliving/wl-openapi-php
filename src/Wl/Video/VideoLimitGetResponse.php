<?php

namespace WlSdk\Wl\Video;

/**
 * Response from GET
 */
class VideoLimitGetResponse
{
    /**
     * Whether business has reach limits for video upload.
     *
     * @var bool|null
     */
    public ?bool $has_limit = null;

    /**
     * Maximum video size in bytes.
     *
     * @var int|string|null
     */
    public $i_limit = null;

    /**
     * Subscription plan proposed for upgrade if limit reached and this subscription plan can avoid this limit.
     *
     * One of {@link \WlSdk\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid} constants.
     * `null` if plan can not be upgraded.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid
     */
    public ?int $id_upgrade_plan = null;

    /**
     * Monthly payment amount for subscription plan proposed for upgrade
     * if limit reached and this subscription plan can avoid this limit.
     *
     * `null` if plan can not be upgraded.
     *
     * @var string|null
     */
    public ?string $m_upgrade_price = null;

    public function __construct(array $data)
    {
        $this->has_limit = isset($data['has_limit']) ? (bool)$data['has_limit'] : null;
        $this->i_limit = $data['i_limit'] ?? null;
        $this->id_upgrade_plan = isset($data['id_upgrade_plan']) ? (int)$data['id_upgrade_plan'] : null;
        $this->m_upgrade_price = isset($data['m_upgrade_price']) ? (string)$data['m_upgrade_price'] : null;
    }
}
