<?php

namespace WlSdk\Wl\Profile\Purchase;

class MailPostRequest
{
    /**
     * Purchase ID. Primary key in RsPurchaseSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * ID of user for who receipt should be sent. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_purchase' => $this->k_purchase,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
