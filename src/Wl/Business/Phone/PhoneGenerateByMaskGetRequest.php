<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneGenerateByMaskGetRequest
{
    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Phone area code mask to use when searching for possible phone numbers.
     *
     * @var string|null
     */
    public ?string $text_area_code_mask = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_area_code_mask' => $this->text_area_code_mask,
            ],
            static fn ($v) => $v !== null
        );
    }
}
