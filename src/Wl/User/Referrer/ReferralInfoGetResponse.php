<?php

namespace WlSdk\Wl\User\Referrer;

/**
 * Response from GET
 */
class ReferralInfoGetResponse
{
    /**
     * Total reward points earned by this user for referral registration ({@link \WlSdk\RsRewardScoreSid}).
     *
     * @var int|null
     * @see \WlSdk\RsRewardScoreSid
     */
    public ?int $i_point = null;

    /**
     * Number of invited referrals.
     *
     * @var int|null
     */
    public ?int $i_referral = null;

    /**
     * Shareable invite link for the referrer.
     *
     * Navigates to the business registration page with the referrer's encrypted user key as the
     *  `s_referral` parameter. When a new client registers through this link, the "Referred By"
     *  field is pre-filled with this user.
     *
     * @var string|null
     */
    public ?string $url_referral = null;

    public function __construct(array $data)
    {
        $this->i_point = isset($data['i_point']) ? (int)$data['i_point'] : null;
        $this->i_referral = isset($data['i_referral']) ? (int)$data['i_referral'] : null;
        $this->url_referral = isset($data['url_referral']) ? (string)$data['url_referral'] : null;
    }
}
