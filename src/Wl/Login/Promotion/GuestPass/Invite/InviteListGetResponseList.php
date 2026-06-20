<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

class InviteListGetResponseList
{
    /**
     * Guest user identity data.
     *
     * @var InviteListGetResponseListGuest|null
     */
    public ?InviteListGetResponseListGuest $a_guest = null;

    /**
     * Acceptance date and time in business timezone in MySQL datetime format.
     * `null` if the invitation has not been accepted.
     *
     * @var string|null
     */
    public ?string $dtl_accept = null;

    /**
     * Expiry date and time in business timezone in MySQL datetime format.
     * `null` if the invitation has no expiry date.
     *
     * @var string|null
     */
    public ?string $dtl_expire = null;

    /**
     * Date and time the invitation was sent, in business timezone in MySQL datetime format.
     *
     * @var string|null
     */
    public ?string $dtl_invite = null;

    /**
     * Redemption date and time in business timezone in MySQL datetime format.
     *    `null` if the invitation has not been redeemed.
     *
     * @var string|null
     */
    public ?string $dtl_redeem = null;

    /**
     * Rejection date and time in business timezone in MySQL datetime format.
     * `null` if the invitation has not been rejected.
     *
     * @var string|null
     */
    public ?string $dtl_reject = null;

    /**
     * Visit date and time in MySQL datetime format.
     * `null` if no visit is associated.
     *
     * @var string|null
     */
    public ?string $dtl_visit = null;

    /**
     * Acceptance date and time in UTC in MySQL datetime format.
     * `null` if the invitation has not been accepted.
     *
     * @var string|null
     */
    public ?string $dtu_accept = null;

    /**
     * Expiry date and time in UTC in MySQL datetime format.
     *    `null` if the invitation has  no expiry date.
     *
     * @var string|null
     */
    public ?string $dtu_expire = null;

    /**
     * Date and time the invitation was sent, in UTC in MySQL datetime format.
     *
     * @var string|null
     */
    public ?string $dtu_invite = null;

    /**
     * Redemption date and time in UTC in MySQL datetime format.
     *    `null` if the invitation  has not been redeemed.
     *
     * @var string|null
     */
    public ?string $dtu_redeem = null;

    /**
     * Rejection date and time in UTC in MySQL datetime format.
     * `null` if the invitation has not been rejected.
     *
     * @var string|null
     */
    public ?string $dtu_reject = null;

    /**
     * Invitation lifecycle status. One of {@link \WlSdk\Wl\Login\Promotion\GuestPass\Invite\InviteStatusEnum}
     * values.
     *
     * @var \WlSdk\Wl\Login\Promotion\GuestPass\Invite\InviteStatusEnum|null
     */
    public ?\WlSdk\Wl\Login\Promotion\GuestPass\Invite\InviteStatusEnum $id_status = null;

    /**
     * `true` if the guest may only enter when the inviting member is checked in.
     * `null` if no guest pass settings are configured for the promotion.
     *
     * @var bool|null
     */
    public ?bool $is_checkin = null;

    /**
     * `true` if associated visit in future, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_visit_future = null;

    /**
     * Login promotion key granted to the guest upon acceptance.
     * 
     * `null` if the invitation has not been accepted.
     *
     * @var string|null
     */
    public ?string $k_login_promotion_guest = null;

    /**
     * Login promotion key of the host membership.
     *
     * @var string|null
     */
    public ?string $k_login_promotion_host = null;

    /**
     * Guest promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Visit key redeemed with this guest pass.
     * 
     * `null` if no visit is associated.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Secret token used to accept or reject the invitation via a direct link.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Full name of the host user who sent the invitation.
     *    `null` if the host could not be resolved.
     *
     * @var string|null
     */
    public ?string $text_host_name = null;

    /**
     * Title of the guest promotion.
     *
     * @var string|null
     */
    public ?string $text_promotion_guest = null;

    /**
     * Title of the host promotion.
     *
     * @var string|null
     */
    public ?string $text_promotion_host = null;

    /**
     * Title of the service booked with the guest pass.
     * `null` if no visit is associated.
     *
     * @var string|null
     */
    public ?string $text_service_title = null;

    /**
     * Name of the business timezone used for all `dtl_*` fields (e.g. "America/New_York").
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * User key of the host who sent the invitation.
     * 
     * `null` if the host could not be resolved.
     *
     * @var string|null
     */
    public ?string $uid_host = null;

    /**
     * URL to the attendance page for the associated class period.
     * Empty string if no visit is associated or the visit is not a class.
     *
     * @var string|null
     */
    public ?string $url_service = null;

    public function __construct(array $data)
    {
        $this->a_guest = isset($data['a_guest']) ? new InviteListGetResponseListGuest((array)$data['a_guest']) : null;
        $this->dtl_accept = isset($data['dtl_accept']) ? (string)$data['dtl_accept'] : null;
        $this->dtl_expire = isset($data['dtl_expire']) ? (string)$data['dtl_expire'] : null;
        $this->dtl_invite = isset($data['dtl_invite']) ? (string)$data['dtl_invite'] : null;
        $this->dtl_redeem = isset($data['dtl_redeem']) ? (string)$data['dtl_redeem'] : null;
        $this->dtl_reject = isset($data['dtl_reject']) ? (string)$data['dtl_reject'] : null;
        $this->dtl_visit = isset($data['dtl_visit']) ? (string)$data['dtl_visit'] : null;
        $this->dtu_accept = isset($data['dtu_accept']) ? (string)$data['dtu_accept'] : null;
        $this->dtu_expire = isset($data['dtu_expire']) ? (string)$data['dtu_expire'] : null;
        $this->dtu_invite = isset($data['dtu_invite']) ? (string)$data['dtu_invite'] : null;
        $this->dtu_redeem = isset($data['dtu_redeem']) ? (string)$data['dtu_redeem'] : null;
        $this->dtu_reject = isset($data['dtu_reject']) ? (string)$data['dtu_reject'] : null;
        $this->id_status = isset($data['id_status']) ? \WlSdk\Wl\Login\Promotion\GuestPass\Invite\InviteStatusEnum::tryFrom((int)$data['id_status']) : null;
        $this->is_checkin = isset($data['is_checkin']) ? (bool)$data['is_checkin'] : null;
        $this->is_visit_future = isset($data['is_visit_future']) ? (bool)$data['is_visit_future'] : null;
        $this->k_login_promotion_guest = isset($data['k_login_promotion_guest']) ? (string)$data['k_login_promotion_guest'] : null;
        $this->k_login_promotion_host = isset($data['k_login_promotion_host']) ? (string)$data['k_login_promotion_host'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->s_secret = isset($data['s_secret']) ? (string)$data['s_secret'] : null;
        $this->text_host_name = isset($data['text_host_name']) ? (string)$data['text_host_name'] : null;
        $this->text_promotion_guest = isset($data['text_promotion_guest']) ? (string)$data['text_promotion_guest'] : null;
        $this->text_promotion_host = isset($data['text_promotion_host']) ? (string)$data['text_promotion_host'] : null;
        $this->text_service_title = isset($data['text_service_title']) ? (string)$data['text_service_title'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->uid_host = isset($data['uid_host']) ? (string)$data['uid_host'] : null;
        $this->url_service = isset($data['url_service']) ? (string)$data['url_service'] : null;
    }
}
