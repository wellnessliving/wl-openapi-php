<?php

namespace WlSdk\Wl\Staff\PayRate;

class ItemPostRequest
{
    /**
     * Key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of staff pay rate.
     * Empty if you need to add new pay rate.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * Additional data about staff pay rate. Contains different data depending on the type `id_staff_pay`.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Type of the staff pay rate.
     * Required for adding new staff pay rates.
     *
     * @var int|null
     * @see \WlSdk\RsStaffPaySid
     */
    public ?int $id_staff_pay = null;

    /**
     * Whether the pay rate should be used as default commission rate for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_commission_default = null;

    /**
     * Whether the pay rate should be used as default for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Whether the pay rate should be used as hourly default for the staff.
     *
     * `null` in case when don't need change this field.
     *
     * @var bool|null
     */
    public ?bool $is_hour_default = null;

    /**
     * Whether pay rate should be applied to calculate staff load.
     * Used with `id_staff_pay`={@link \WlSdk\RsStaffPaySid} only.
     *
     * @var bool|null
     */
    public ?bool $is_report = null;

    /**
     * Location key.
     * This is a location where pay rate can be used for a staff load. If empty then pay rate can be used in any
     * location.
     * Used only for pay rates with `id_staff_pay`={@link \WlSdk\RsStaffPaySid} and `is_report`=1.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Title of the pay rate.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Key of user staff.
     * Required for adding new staff pay rates.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_staff_pay' => $this->k_staff_pay,
            'a_data' => $this->a_data,
            'id_staff_pay' => $this->id_staff_pay,
            'is_commission_default' => $this->is_commission_default,
            'is_default' => $this->is_default,
            'is_hour_default' => $this->is_hour_default,
            'is_report' => $this->is_report,
            'k_location' => $this->k_location,
            'text_title' => $this->text_title,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
