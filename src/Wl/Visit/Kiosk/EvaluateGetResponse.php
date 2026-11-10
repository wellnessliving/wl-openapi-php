<?php

namespace WlSdk\Wl\Visit\Kiosk;

/**
 * Response from GET
 */
class EvaluateGetResponse
{
    /**
     * Passes of the client that may pay for a gym visit.
     *
     * The pass that the check-in would take is marked with `is_use`. No pass is marked when the check-in would
     * take
     * the booked visit of the day at the location of the kiosk.
     *
     * @var EvaluateGetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * Time of the check-in of the gym visit of the day, in UTC and MySQL format, for example `2026-11-05
     * 14:30:00`.
     *
     * The time of the visit when the visit has not been checked in. `null` if the client has no gym visit on the
     * day.
     *
     * @var string|null
     */
    public ?string $dtu_attend = null;

    /**
     * The first reason why the check-in would be refused.
     *
     * One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` if no reason is found; the check-in still
     * may be refused by
     * the rules of the booking.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_deny_reason = null;

    /**
     * Reason why the pass of the client does not pay for the visit.
     *
     * One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` if a pass pays for the visit.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_unpaid_reason = null;

    /**
     * Whether the gym visit of the day is checked in.
     *
     * `false` also when the client has no gym visit on the day.
     *
     * @var bool|null
     */
    public ?bool $is_attend = null;

    /**
     * Whether the balance of the account of the client (or of the payer of the client) is negative.
     *
     * @var bool|null
     */
    public ?bool $is_balance_owing = null;

    /**
     * Whether the client has only expired credit cards.
     *
     * @var bool|null
     */
    public ?bool $is_card_expired = null;

    /**
     * Whether a credit card of the client expires in less than a month.
     *
     * @var bool|null
     */
    public ?bool $is_card_expiring = null;

    /**
     * Whether the client has a purchase whose contract is not signed.
     *
     * @var bool|null
     */
    public ?bool $is_contract = null;

    /**
     * Whether the client is flagged for booking at the location.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * Whether the client has a required form that is not completed.
     *
     * @var bool|null
     */
    public ?bool $is_form_mandatory = null;

    /**
     * Whether the pass that the check-in would take has 2 or fewer visits left.
     *
     * `false` when no pass would be taken or the pass is unlimited.
     *
     * @var bool|null
     */
    public ?bool $is_pass_last_visit = null;

    /**
     * Whether a pass of the client has expired.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_expired = null;

    /**
     * Whether a pass of the client is on hold.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_hold = null;

    /**
     * Whether the client has unpaid visits.
     *
     * @var bool|null
     */
    public ?bool $is_unpaid_visit = null;

    /**
     * Whether the business requires a waiver that the client has not signed.
     *
     * @var bool|null
     */
    public ?bool $is_waiver = null;

    /**
     * Location of the gym visit of the day; it may be another location of the business.
     *
     * `null` if the client has no gym visit on the day.
     *
     * @var string|null
     */
    public ?string $k_location_visit = null;

    /**
     * Gym visit of the client on the local day of the location.
     *
     * `null` if the client has no gym visit on the day.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Balance of the account of the client (or of the payer of the client), for example `-25.00`.
     *
     * `null` if the staff member may not see the balances of the clients.
     *
     * @var string|null
     */
    public ?string $m_balance = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn ($item) => new EvaluateGetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
        $this->dtu_attend = isset($data['dtu_attend']) ? (string)$data['dtu_attend'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->id_unpaid_reason = isset($data['id_unpaid_reason']) ? (int)$data['id_unpaid_reason'] : null;
        $this->is_attend = isset($data['is_attend']) ? (bool)$data['is_attend'] : null;
        $this->is_balance_owing = isset($data['is_balance_owing']) ? (bool)$data['is_balance_owing'] : null;
        $this->is_card_expired = isset($data['is_card_expired']) ? (bool)$data['is_card_expired'] : null;
        $this->is_card_expiring = isset($data['is_card_expiring']) ? (bool)$data['is_card_expiring'] : null;
        $this->is_contract = isset($data['is_contract']) ? (bool)$data['is_contract'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
        $this->is_form_mandatory = isset($data['is_form_mandatory']) ? (bool)$data['is_form_mandatory'] : null;
        $this->is_pass_last_visit = isset($data['is_pass_last_visit']) ? (bool)$data['is_pass_last_visit'] : null;
        $this->is_promotion_expired = isset($data['is_promotion_expired']) ? (bool)$data['is_promotion_expired'] : null;
        $this->is_promotion_hold = isset($data['is_promotion_hold']) ? (bool)$data['is_promotion_hold'] : null;
        $this->is_unpaid_visit = isset($data['is_unpaid_visit']) ? (bool)$data['is_unpaid_visit'] : null;
        $this->is_waiver = isset($data['is_waiver']) ? (bool)$data['is_waiver'] : null;
        $this->k_location_visit = isset($data['k_location_visit']) ? (string)$data['k_location_visit'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->m_balance = isset($data['m_balance']) ? (string)$data['m_balance'] : null;
    }
}
