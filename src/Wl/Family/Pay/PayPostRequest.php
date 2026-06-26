<?php

namespace WlSdk\Wl\Family\Pay;

class PayPostRequest
{
    /**
     * ID of business to get information for. Primary key in RsBusinessAr table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of user to get information for. Primary key in PassportLoginAr table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * ID of user who will pay for user `uid`.
     * Primary key in PassportLoginAr table.
     * Empty if `uid` will pay for self.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'uid_payer' => $this->uid_payer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
