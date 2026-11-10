<?php

namespace WlSdk\Wl\Visit\Kiosk;

/**
 * Response from POST
 */
class AttendPostResponse
{
    /**
     * Time of the check-in of the gym visit that the client already has on the day, in UTC and MySQL format, for
     * example `2026-11-05 14:30:00`.
     *
     * `null` unless the check-in is refused because the client is already checked in on the day.
     *
     * @var string|null
     */
    public ?string $dtu_attend = null;

    /**
     * Time of the check-in in UTC and MySQL format, for example `2026-11-05 14:30:00`.
     *
     * `null` if the check-in has been refused.
     *
     * @var string|null
     */
    public ?string $dtu_register = null;

    /**
     * Number of seconds after which the kiosk closes the message of a failed check-in.
     *
     * `0` if the business does not close this message automatically. A setting of the business.
     *
     * @var int|null
     */
    public ?int $i_attend_quick_close_fail = null;

    /**
     * Number of seconds after which the kiosk closes the message of a successful check-in.
     *
     * `0` if the business does not close this message automatically. A setting of the business.
     *
     * @var int|null
     */
    public ?int $i_attend_quick_close_success = null;

    /**
     * Reason why the check-in has been refused.
     *
     * One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` if the check-in has been made.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_deny_reason = null;

    /**
     * Reason why no pass pays for the visit.
     *
     * One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` if the visit is paid or the check-in has
     * been refused. `0`
     * also if the check-in has taken the booked visit of the day that has no payment while the client has a valid
     * pass, and the business does not reconcile that visit with the pass at the check-in.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_unpaid_reason = null;

    /**
     * Status of the visit after the check-in.
     *
     * One of {@link \WlSdk\Wl\Visit\VisitSid} constants. `0` if the check-in has been refused.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * Whether the kiosk opens the profile of the client after a successful check-in. A setting of the business.
     *
     * @var bool|null
     */
    public ?bool $is_attend_quick_navigate = null;

    /**
     * Whether the visit is paid.
     *
     * A visit may be paid without a pass, by a purchase item or by a partner system: then it is `true`, while
     * {@link \WlSdk\Wl\Visit\Kiosk\AttendPostResponse::$k_login_promotion} and {@link
     * \WlSdk\Wl\Visit\Kiosk\AttendPostResponse::$text_pass} are `null`. `false` also if the
     * check-in has been refused.
     *
     * @var bool|null
     */
    public ?bool $is_paid = null;

    /**
     * Location of the gym visit that the client already has on the day, when the check-in is refused for it.
     *
     * `null` in all other cases.
     *
     * @var string|null
     */
    public ?string $k_location_visit = null;

    /**
     * Pass that pays for the visit.
     *
     * `null` if no pass pays for the visit or the check-in has been refused. `null` also for a visit paid without
     * a
     * pass, by a purchase item or by a partner system, while {@link
     * \WlSdk\Wl\Visit\Kiosk\AttendPostResponse::$is_paid} is `true`.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The checked-in visit; when the check-in is refused because the client is already checked in on the day, the
     * visit that the client has.
     *
     * `null` if the check-in has been refused for another reason.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the failed attempt of the check-in, the same as in the list of the attempts of the location
     * ({@link \WlSdk\Wl\Visit\Kiosk\AttemptList}).
     *
     * `null` if the check-in has been made, or has been refused without a record of a failed attempt (the client
     * is
     * already checked in on the day).
     *
     * @var string|null
     */
    public ?string $s_attempt = null;

    /**
     * Message of the refusal for the staff member.
     *
     * Empty string if the check-in has been made.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * Title of the pass that pays for the visit.
     *
     * `null` if no pass pays for the visit or the check-in has been refused. `null` also for a visit paid without
     * a
     * pass, by a purchase item or by a partner system, while {@link
     * \WlSdk\Wl\Visit\Kiosk\AttendPostResponse::$is_paid} is `true`.
     *
     * @var string|null
     */
    public ?string $text_pass = null;

    /**
     * Address of the store where the client may buy a pass, for example `https://example.com/catalog-list.html`.
     *
     * `null` if the visit is paid or the check-in has been refused.
     *
     * @var string|null
     */
    public ?string $url_store = null;

    public function __construct(array $data)
    {
        $this->dtu_attend = isset($data['dtu_attend']) ? (string)$data['dtu_attend'] : null;
        $this->dtu_register = isset($data['dtu_register']) ? (string)$data['dtu_register'] : null;
        $this->i_attend_quick_close_fail = isset($data['i_attend_quick_close_fail']) ? (int)$data['i_attend_quick_close_fail'] : null;
        $this->i_attend_quick_close_success = isset($data['i_attend_quick_close_success']) ? (int)$data['i_attend_quick_close_success'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->id_unpaid_reason = isset($data['id_unpaid_reason']) ? (int)$data['id_unpaid_reason'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_attend_quick_navigate = isset($data['is_attend_quick_navigate']) ? (bool)$data['is_attend_quick_navigate'] : null;
        $this->is_paid = isset($data['is_paid']) ? (bool)$data['is_paid'] : null;
        $this->k_location_visit = isset($data['k_location_visit']) ? (string)$data['k_location_visit'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->s_attempt = isset($data['s_attempt']) ? (string)$data['s_attempt'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->text_pass = isset($data['text_pass']) ? (string)$data['text_pass'] : null;
        $this->url_store = isset($data['url_store']) ? (string)$data['url_store'] : null;
    }
}
