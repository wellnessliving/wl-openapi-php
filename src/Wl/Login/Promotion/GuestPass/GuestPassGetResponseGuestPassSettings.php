<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassGetResponseGuestPassSettings
{
    /**
     * Count of days for accept guest invite.
     *
     * If the invitation is not accepted within this time, it will be canceled.
     *
     * @var int|null
     */
    public ?int $i_claim_day = null;

    /**
     * Times that member can invite the same guest.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The time during which a member can invite a guest `i_limit` times.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * Type of the duration of `i_limit_duration`. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     */
    public ?int $id_limit_duration = null;

    /**
     * Whether guests can only enter the gym when the inviting member is checked in.
     *
     * @var bool|null
     */
    public ?bool $is_checkin = null;

    /**
     * Whether there are limits for a guest promotion.
     *
     * @var bool|null
     */
    public ?bool $is_limit = null;

    public function __construct(array $data)
    {
        $this->i_claim_day = isset($data['i_claim_day']) ? (int)$data['i_claim_day'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->id_limit_duration = isset($data['id_limit_duration']) ? (int)$data['id_limit_duration'] : null;
        $this->is_checkin = isset($data['is_checkin']) ? (bool)$data['is_checkin'] : null;
        $this->is_limit = isset($data['is_limit']) ? (bool)$data['is_limit'] : null;
    }
}
