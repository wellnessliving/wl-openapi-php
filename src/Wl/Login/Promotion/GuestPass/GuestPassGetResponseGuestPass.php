<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassGetResponseGuestPass
{
    /**
     * Thumbnail image data for the guest promotion.
     *
     * @var GuestPassGetResponseGuestPassImage|null
     */
    public ?GuestPassGetResponseGuestPassImage $a_image = null;

    /**
     * Start and end dates of the current reset period.
     *   `null` if there is no reset period or the reset date is unavailable.
     *
     * @var GuestPassGetResponseGuestPassPeriodDl|null
     */
    public ?GuestPassGetResponseGuestPassPeriodDl $a_period_dl = null;

    /**
     * Guest pass settings.
     * Empty array when the guest pass has no settings (class-type passes).
     *
     * @var GuestPassGetResponseGuestPassSettings|null
     */
    public ?GuestPassGetResponseGuestPassSettings $a_settings = null;

    /**
     * `true` if the guest pass is invite-type (the member sends invitations to guests).
     *
     * @var bool|null
     */
    public ?bool $can_invite = null;

    /**
     * `true` if the member can currently send a guest pass (eligible and within quota).
     *
     * @var bool|null
     */
    public ?bool $can_send = null;

    /**
     * Date on which the pass resets or expires, in MySQL date format.
     * `null` if no expiry date is determined.
     *
     * @var string|null
     */
    public ?string $dl_reset = null;

    /**
     * `true` if the guest pass is service-type (not invite-type). Inverse of `can_invite`.
     *
     * @var bool|null
     */
    public ?bool $has_service = null;

    /**
     * Maximum guest passes that can be sent per day. `null` if there is no daily cap.
     *
     * @var int|null
     */
    public ?int $i_cap_day = null;

    /**
     * Total number of guest passes initially granted. `null` if the supply is unlimited.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Numeric length of the reset period (for example `1` for a one-month period).
     * `null` if the promotion has no reset period.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * Number of guest passes remaining in the current period.
     * `null` if the supply is unlimited.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Number of guest passes remaining today per the daily cap.
     * `null` if there is no daily cap.
     *
     * @var int|null
     */
    public ?int $i_remain_day = null;

    /**
     * Number of accepted invitations for this guest pass.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * Unit of the reset period. One of [ADurationSid](#/components/schemas/ADurationSid) constants.
     * `null` if the promotion has no reset period.
     *
     * @var int|null
     */
    public ?int $id_period = null;

    /**
     * Guest pass program ID.
     * One of [RsProgramSid](#/components/schemas/RsProgramSid) constants.
     *
     * @var int|null
     */
    public ?int $id_program_guest = null;

    /**
     * Reset type of the host promotion. One of
     * [GuestPassResetTypeSid](#/components/schemas/Wl.Promotion.Guest.Pass.GuestPassResetTypeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_reset_type_guest = null;

    /**
     * `true` if the pass is close enough to its reset or expiry date that the UI should
     * display a warning.
     *
     * @var bool|null
     */
    public ?bool $is_expire_note = null;

    /**
     * `true` if the remaining count resets on `dl_reset`;
     * `false` if the pass expires on that date.
     *
     * @var bool|null
     */
    public ?bool $is_reset = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key of the host membership.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Guest promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Comma-separated list of location titles where the promotion is valid.
     * Empty when the promotion is business-wide.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Full name of the membership owner.
     *
     * @var string|null
     */
    public ?string $text_owner = null;

    /**
     * Human-readable reset period label (e.g. "1 month").
     * Empty when there is no reset period.
     *
     * @var string|null
     */
    public ?string $text_period = null;

    /**
     * Human-readable date range of the current period (e.g. "Jan 1 - Jan 31").
     * Empty when there is no reset period or the reset date is unavailable.
     *
     * @var string|null
     */
    public ?string $text_period_date = null;

    /**
     * Title of the host (granting) promotion.
     *
     * @var string|null
     */
    public ?string $text_promotion_grant = null;

    /**
     * Title of the guest promotion.
     *
     * @var string|null
     */
    public ?string $text_promotion_guest = null;

    /**
     * User key of the membership owner.
     *
     * @var string|null
     */
    public ?string $uid_owner = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new GuestPassGetResponseGuestPassImage((array)$data['a_image']) : null;
        $this->a_period_dl = isset($data['a_period_dl']) ? new GuestPassGetResponseGuestPassPeriodDl((array)$data['a_period_dl']) : null;
        $this->a_settings = isset($data['a_settings']) ? new GuestPassGetResponseGuestPassSettings((array)$data['a_settings']) : null;
        $this->can_invite = isset($data['can_invite']) ? (bool)$data['can_invite'] : null;
        $this->can_send = isset($data['can_send']) ? (bool)$data['can_send'] : null;
        $this->dl_reset = isset($data['dl_reset']) ? (string)$data['dl_reset'] : null;
        $this->has_service = isset($data['has_service']) ? (bool)$data['has_service'] : null;
        $this->i_cap_day = isset($data['i_cap_day']) ? (int)$data['i_cap_day'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_period = isset($data['i_period']) ? (int)$data['i_period'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_remain_day = isset($data['i_remain_day']) ? (int)$data['i_remain_day'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->id_period = isset($data['id_period']) ? (int)$data['id_period'] : null;
        $this->id_program_guest = isset($data['id_program_guest']) ? (int)$data['id_program_guest'] : null;
        $this->id_reset_type_guest = isset($data['id_reset_type_guest']) ? (int)$data['id_reset_type_guest'] : null;
        $this->is_expire_note = isset($data['is_expire_note']) ? (bool)$data['is_expire_note'] : null;
        $this->is_reset = isset($data['is_reset']) ? (bool)$data['is_reset'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_owner = isset($data['text_owner']) ? (string)$data['text_owner'] : null;
        $this->text_period = isset($data['text_period']) ? (string)$data['text_period'] : null;
        $this->text_period_date = isset($data['text_period_date']) ? (string)$data['text_period_date'] : null;
        $this->text_promotion_grant = isset($data['text_promotion_grant']) ? (string)$data['text_promotion_grant'] : null;
        $this->text_promotion_guest = isset($data['text_promotion_guest']) ? (string)$data['text_promotion_guest'] : null;
        $this->uid_owner = isset($data['uid_owner']) ? (string)$data['uid_owner'] : null;
    }
}
