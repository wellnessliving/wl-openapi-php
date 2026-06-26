<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogGetRequest
{
    /**
     * Key of the business this sms chat is connected to. Primary key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user sms chat is related to. Primary key from PassportLoginSql.
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
