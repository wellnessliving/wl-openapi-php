<?php

namespace WlSdk\Wl\Staff\PayRate;

class ListGetResponsePayRate
{
    /**
     * Pay rate type, one of {@link \WlSdk\RsStaffPaySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsStaffPaySid
     */
    public ?int $id_staff_pay = null;

    /**
     * Whether commission pay rate used as default for staff with `k_staff`.
     *
     * @var bool|null
     */
    public ?bool $is_commission_default = null;

    /**
     * Whether pay rate used as default for staff with `k_staff`.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Whether hourly pay rate used as default for staff with `k_staff`.
     *
     * @var bool|null
     */
    public ?bool $is_hour_default = null;

    /**
     * Location key. Primary key from RsLocationSql. This is a location where pay rate can be used for a staff
     * staff load. If empty then pay rate can be used in any location. Used only for pay
     * rates with `id_staff_pay`={@link \WlSdk\RsStaffPaySid} and `is_report`=1.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * TODO wl-80218: Remove this field after third parties do not use it.
     * Staff key, primary key in RsStaffSql.
     * deprecated Returned only for applications from legacy allow-list. Use `uid_staff`.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Pay rate identifier, primary key in RsStaffPaySql.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * Name of staff member.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * Pay rate title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Staff user ID. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->id_staff_pay = isset($data['id_staff_pay']) ? (int)$data['id_staff_pay'] : null;
        $this->is_commission_default = isset($data['is_commission_default']) ? (bool)$data['is_commission_default'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->is_hour_default = isset($data['is_hour_default']) ? (bool)$data['is_hour_default'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
