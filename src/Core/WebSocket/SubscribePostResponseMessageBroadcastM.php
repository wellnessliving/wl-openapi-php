<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastM
{
    /**
     * Time of the attempt (of the check-in for a visit), in UTC and MySQL format, for example `2026-11-05
     * 14:30:00`.
     *
     * The same value as `dtu_attempt` of the row of the attempt in {@link
     * \WlSdk\Wl\Visit\Kiosk\AttemptListGetResponse::$a_attempt}.
     *
     * @var string|null
     */
    public ?string $dtu_attempt = null;

    /**
     * Reason of the failure. One of {@link \WlSdk\Wl\Visit\VisitDenyReasonSid} constants. `0` for a check-in.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitDenyReasonSid
     */
    public ?int $id_deny_reason = null;

    /**
     * Source of the attempt. One of {@link \WlSdk\Wl\Mode\ModeSid} constants. `null` if the source of the check-in
     * is not recorded.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * `true` for a failed attempt, `false` for a check-in.
     *
     * @var bool|null
     */
    public ?bool $is_fail = null;

    /**
     * Key of the checked-in visit. `null` for a failed attempt.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function __construct(array $data)
    {
        $this->dtu_attempt = isset($data['dtu_attempt']) ? (string)$data['dtu_attempt'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->id_mode = isset($data['id_mode']) ? (int)$data['id_mode'] : null;
        $this->is_fail = isset($data['is_fail']) ? (bool)$data['is_fail'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
    }
}
