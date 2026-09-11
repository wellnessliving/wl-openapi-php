<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemData
{
    /**
     * Access to services for a purchase option.
     * Keys are one of the {@link \WlSdk\Wl\Service\ServiceSid} constants, values are one of the {@link
     * \WlSdk\AFlagSid}
     * constants. Set only for relevant purchase option service category.
     * {@link \WlSdk\AFlagSid} access to some services.
     * {@link \WlSdk\AFlagSid} no access to services. It can be set only for classes and events.
     * {@link \WlSdk\AFlagSid} access to all services. It can be set only for classes and events.
     * For purchase options with appointments and assets service category status is always {@link \WlSdk\AFlagSid}.
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
     * @var ElementGetResponseItemDataComponent|null
     */
    public ?ElementGetResponseItemDataComponent $a_component = null;

    /**
     * This applies to enrollment/event items. Staff list for class periods. Each element contains:
     *
     * @var ElementGetResponseItemDataStaff|null
     */
    public ?ElementGetResponseItemDataStaff $a_staff = null;

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
     * Type of a coupon activation date specification. One of {@link \WlSdk\Wl\Coupon\Edit\ActivationSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Coupon\Edit\ActivationSid
     */
    public ?int $id_activation = null;

    /**
     * Duration of a period. A constant from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_duration = null;

    /**
     * A way to specify a duration. One of {@link \WlSdk\Wl\Coupon\Edit\DurationTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Coupon\Edit\DurationTypeSid
     */
    public ?int $id_duration_type = null;

    /**
     * Whether to display individual prices for each item in the package.
     *
     * @var bool|null
     */
    public ?bool $is_price_breakdown = null;

    public function __construct(array $data)
    {
        $this->a_service_access = isset($data['a_service_access']) ? (array)$data['a_service_access'] : null;
        $this->is_renew_public = isset($data['is_renew_public']) ? (bool)$data['is_renew_public'] : null;
        $this->a_component = isset($data['a_component']) ? new ElementGetResponseItemDataComponent((array)$data['a_component']) : null;
        $this->a_staff = isset($data['a_staff']) ? new ElementGetResponseItemDataStaff((array)$data['a_staff']) : null;
        $this->dl_expire = isset($data['dl_expire']) ? (string)$data['dl_expire'] : null;
        $this->dl_now = isset($data['dl_now']) ? (string)$data['dl_now'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_activation = isset($data['id_activation']) ? (int)$data['id_activation'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_duration_type = isset($data['id_duration_type']) ? (int)$data['id_duration_type'] : null;
        $this->is_price_breakdown = isset($data['is_price_breakdown']) ? (bool)$data['is_price_breakdown'] : null;
    }
}
