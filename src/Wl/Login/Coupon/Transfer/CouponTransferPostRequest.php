<?php

namespace WlSdk\Wl\Login\Coupon\Transfer;

class CouponTransferPostRequest
{
    /**
     * Key of source mode. One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Key of business. Primary key in RsBusinessSql table.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of login coupon to be transferred. Primary key in RsLoginCouponSql table.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_login_coupon = null;

    /**
     * User ID to transfer purchased coupon from. Primary key in PassportLoginSql table.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $uid_from = null;

    /**
     * User ID to transfer purchased coupon to. Primary key in PassportLoginSql table.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $uid_to = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_login_coupon' => $this->k_login_coupon,
            'uid_from' => $this->uid_from,
            'uid_to' => $this->uid_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
