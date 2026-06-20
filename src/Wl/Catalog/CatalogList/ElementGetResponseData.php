<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseData
{
    /**
     * Access to services for a purchase option.
     * Keys are one of the [ServiceSid](#/components/schemas/Wl.Service.ServiceSid) constants, values are one of
     * the [AFlagSid](#/components/schemas/AFlagSid)
     * constants. Set only for relevant purchase option service category.
     * [AFlagSid::ON](#/components/schemas/AFlagSid) access to some services.
     * [AFlagSid::OFF](#/components/schemas/AFlagSid) no access to services. It can be set only for classes and
     * events.
     * [AFlagSid::ALL](#/components/schemas/AFlagSid) access to all services. It can be set only for classes and
     * events.
     * For purchase options with appointments and assets service category status is always
     * [AFlagSid::ON](#/components/schemas/AFlagSid).
     *
     * @var int[]|null
     */
    public ?array $a_service_access = null;

    /**
     * This applies only for promotions.
     * `true` - clients can set promotion auto-renew.
     * `false` - clients can't set promotion auto-renew.
     *
     * @var bool|null
     */
    public ?bool $is_renew_public = null;

    /**
     * This applies only for coupons. Coupon components information. Each element will contain the following keys:
     *
     * @var ElementGetResponseDataComponent|null
     */
    public ?ElementGetResponseDataComponent $a_component = null;

    /**
     * This applies to enrollment/event items. Staff list for class periods. Each element contains:
     *
     * @var ElementGetResponseDataStaff|null
     */
    public ?ElementGetResponseDataStaff $a_staff = null;

    /**
     * Date of expiration of coupon, local date in MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_expire = null;

    /**
     * Current date, local date in MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_now = null;

    /**
     * Date to activate the coupon on, local date in MySQL format.
     *   When `id_activation`=FIXED, this field contains a custom date to activate the coupon on, local date in
     * MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Number of periods the coupon is active. Type of a period is specified by `id_duration`.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Type of a coupon activation date specification. One of
     * [ActivationSid](#/components/schemas/Wl.Coupon.Edit.ActivationSid) constants.
     *
     * @var int|null
     */
    public ?int $id_activation = null;

    /**
     * Duration of a period. A constant from [ADurationSid](#/components/schemas/ADurationSid).
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * A way to specify a duration. One of [DurationTypeSid](#/components/schemas/Wl.Coupon.Edit.DurationTypeSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_duration_type = null;

    public function __construct(array $data)
    {
        $this->a_service_access = isset($data['a_service_access']) ? (array)$data['a_service_access'] : null;
        $this->is_renew_public = isset($data['is_renew_public']) ? (bool)$data['is_renew_public'] : null;
        $this->a_component = isset($data['a_component']) ? new ElementGetResponseDataComponent((array)$data['a_component']) : null;
        $this->a_staff = isset($data['a_staff']) ? new ElementGetResponseDataStaff((array)$data['a_staff']) : null;
        $this->dl_expire = isset($data['dl_expire']) ? (string)$data['dl_expire'] : null;
        $this->dl_now = isset($data['dl_now']) ? (string)$data['dl_now'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_activation = isset($data['id_activation']) ? (int)$data['id_activation'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_duration_type = isset($data['id_duration_type']) ? (int)$data['id_duration_type'] : null;
    }
}
