<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneSimilarGetRequest
{
    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Phone number, which was failed to verify.
     * Used to get similar phone numbers from provider.
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
