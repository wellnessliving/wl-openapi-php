<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business phone number(in locale format).
     * Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
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
