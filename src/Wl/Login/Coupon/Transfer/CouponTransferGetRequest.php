<?php

namespace WlSdk\Wl\Login\Coupon\Transfer;

class CouponTransferGetRequest
{
    /**
     * Key of business. Primary key in RsBusinessSql table.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
            'k_business' => $this->k_business,
            'uid_from' => $this->uid_from,
            'uid_to' => $this->uid_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
