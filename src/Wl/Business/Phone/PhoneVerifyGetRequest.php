<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneVerifyGetRequest
{
    /**
     * Business key. Primary key in RsBusinessSql.
     * It is necessary to get business locale settings and normalize phone number.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_phone' => $this->text_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
