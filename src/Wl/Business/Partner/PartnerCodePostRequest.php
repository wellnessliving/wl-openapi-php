<?php

namespace WlSdk\Wl\Business\Partner;

class PartnerCodePostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique code that business can give other businesses to tell them about system.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_code' => $this->text_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
