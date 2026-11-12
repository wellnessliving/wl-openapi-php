<?php

namespace WlSdk\Wl\Visit\Kiosk;

class AttemptListGetResponseAttempt
{
    /**
     * Time of the attempt (of the check-in for a visit), in UTC and MySQL format, for example
     * `2026-11-05 14:30:00`.
     *
     * @var string|null
     */
    public ?string $dtu_attempt = null;

    /**
     * Reason of the failure. One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` for a visit.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_deny_reason = null;

    /**
     * Source of the attempt. One of {@link \WlSdk\Wl\Mode\ModeSid} constants. `null` if a visit was checked in
     * before the
     * source was recorded.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * `true` for a failed attempt, `false` for a checked-in visit.
     *
     * @var bool|null
     */
    public ?bool $is_fail = null;

    /**
     * Location of the attempt.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pass that pays for the visit. `null` for a failed attempt or a visit that no pass pays for.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The checked-in visit. `null` for a failed attempt.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the failed attempt, the same as the check-in of the kiosk gives ({@link
     * \WlSdk\Wl\Visit\Kiosk\Attend}). `null` for a
     * visit.
     *
     * @var string|null
     */
    public ?string $s_attempt = null;

    /**
     * Full name of the user who made the attempt. `null` if nobody was signed in.
     *
     * @var string|null
     */
    public ?string $text_actor_name = null;

    /**
     * First name of the client. `null` for a walk-in.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Last name of the client. `null` for a walk-in.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Title of the pass that pays for the visit. `null` when `k_login_promotion` is `null`.
     *
     * @var string|null
     */
    public ?string $text_pass = null;

    /**
     * User who made the attempt. `null` if nobody was signed in.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * The client. `null` for a walk-in.
     *
     * @var string|null
     */
    public ?string $uid_attend = null;

    /**
     * Address of the photo of the client, for example `https://example.com/photo.jpg`. `null` for a
     * walk-in.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->dtu_attempt = isset($data['dtu_attempt']) ? (string)$data['dtu_attempt'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->id_mode = isset($data['id_mode']) ? (int)$data['id_mode'] : null;
        $this->is_fail = isset($data['is_fail']) ? (bool)$data['is_fail'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->s_attempt = isset($data['s_attempt']) ? (string)$data['s_attempt'] : null;
        $this->text_actor_name = isset($data['text_actor_name']) ? (string)$data['text_actor_name'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_pass = isset($data['text_pass']) ? (string)$data['text_pass'] : null;
        $this->uid_actor = isset($data['uid_actor']) ? (string)$data['uid_actor'] : null;
        $this->uid_attend = isset($data['uid_attend']) ? (string)$data['uid_attend'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
