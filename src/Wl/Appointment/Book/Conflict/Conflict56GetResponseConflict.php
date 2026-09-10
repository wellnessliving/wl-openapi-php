<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

class Conflict56GetResponseConflict
{
    /**
     * Titles of assets that cause the conflict. Not empty only if the conflict is caused by assets.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * Date and time of the conflict in UTC, in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * Date and time of the conflict in the location timezone, in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Message describing a client age restriction conflict, already HTML-escaped.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * `true` if the conflict is caused by a client age restriction.
     *
     * @var bool|null
     */
    public ?bool $is_age_conflict = null;

    /**
     * `true` if the conflict is caused by a holiday, `false` for another reason.
     *
     * @var bool|null
     */
    public ?bool $is_holiday = null;

    /**
     * `true` if the conflict is caused by the staff member's working hours, `false` for another reason.
     *
     * @var bool|null
     */
    public ?bool $is_staff_conflict = null;

    /**
     * Staff member key, kept only for applications still using the deprecated legacy staff identifier.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Name of the staff member who conducts the appointment.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * User ID of the client whose age restriction caused the conflict.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Staff member user ID resolved for the conflict entry.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->dt_date_global = isset($data['dt_date_global']) ? (string)$data['dt_date_global'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->is_age_conflict = isset($data['is_age_conflict']) ? (bool)$data['is_age_conflict'] : null;
        $this->is_holiday = isset($data['is_holiday']) ? (bool)$data['is_holiday'] : null;
        $this->is_staff_conflict = isset($data['is_staff_conflict']) ? (bool)$data['is_staff_conflict'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
