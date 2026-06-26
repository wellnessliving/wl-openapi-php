<?php

namespace WlSdk\Wl\Family\Pay;

class PayGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
