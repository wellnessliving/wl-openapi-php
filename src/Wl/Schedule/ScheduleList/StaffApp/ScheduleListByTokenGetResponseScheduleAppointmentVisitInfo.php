<?php
namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

class ScheduleListByTokenGetResponseScheduleAppointmentVisitInfo
{
    /**
     * Visit id. One of {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     */
    public ?int $id_visit = null;

    /**
     * `true` means that appointment was requested and confirmed by the staff.
     *
     * @var bool|null
     */
    public ?bool $is_confirmed = null;

    /**
     * `true` means that appointment was requested and denied by the staff.
     *
     * @var bool|null
     */
    public ?bool $is_deny = null;

    /**
     * `true` means that the client will receive a notification, if appointment will be confirmed by the staff.
     *
     * @var bool|null
     */
    public ?bool $is_notify_request_accept = null;

    /**
     * `true` means that the client will receive a notification, if appointment will be denied by the staff.
     *
     * @var bool|null
     */
    public ?bool $is_notify_request_deny = null;

    /**
     * `true` means that appointment was requested, but not confirmed by the staff.
     *
     * @var bool|null
     */
    public ?bool $is_request = null;

    public function __construct(array $data)
    {
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_confirmed = isset($data['is_confirmed']) ? (bool)$data['is_confirmed'] : null;
        $this->is_deny = isset($data['is_deny']) ? (bool)$data['is_deny'] : null;
        $this->is_notify_request_accept = isset($data['is_notify_request_accept']) ? (bool)$data['is_notify_request_accept'] : null;
        $this->is_notify_request_deny = isset($data['is_notify_request_deny']) ? (bool)$data['is_notify_request_deny'] : null;
        $this->is_request = isset($data['is_request']) ? (bool)$data['is_request'] : null;
    }
}
