<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionScheduleGetResponseClass
{
    /**
     * A list of shared resources containing:
     *
     * @var ReceptionScheduleGetResponseClassResourcesShared|null
     */
    public ?ReceptionScheduleGetResponseClassResourcesShared $a_resources_shared = null;

    /**
     * A list of staff members instructing the service, containing:
     *
     * @var ReceptionScheduleGetResponseClassStaffAll|null
     */
    public ?ReceptionScheduleGetResponseClassStaffAll $a_staff_all = null;

    /**
     * The session date.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The name of the HTML class that JavaScript uses to display the icon, depending on the service type.
     *
     * @var string|null
     */
    public ?string $html_class_js = null;

    /**
     * The session duration in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Service ID. One of the {@link \WlSdk\Wl\Service\ServiceSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\ServiceSid
     */
    public ?int $id_service = null;

    /**
     * If `true`, the session can be checked in automatically. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_auto = null;

    /**
     * If `true`, the client should be notified that the visit is booked. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * If `true`, the client should be notified that they're on the wait list. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * The appointment key. If `null`, this isn't an appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The class period key. If `null`, this isn't a class or event.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The visit key if the session has been checked in. Otherwise, this will be `null`.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The service name.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * The session duration, formatted by the business configuration.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    /**
     * The time the session takes place.
     *
     * @var string|null
     */
    public ?string $s_time = null;

    public function __construct(array $data)
    {
        $this->a_resources_shared = isset($data['a_resources_shared']) ? new ReceptionScheduleGetResponseClassResourcesShared((array)$data['a_resources_shared']) : null;
        $this->a_staff_all = isset($data['a_staff_all']) ? new ReceptionScheduleGetResponseClassStaffAll((array)$data['a_staff_all']) : null;
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->html_class_js = isset($data['html_class_js']) ? (string)$data['html_class_js'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_service = isset($data['id_service']) ? (int)$data['id_service'] : null;
        $this->is_auto = isset($data['is_auto']) ? (bool)$data['is_auto'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
    }
}
