<?php

namespace WlSdk\Wl\Business\Claim;

class BusinessClaimGetRequest
{
    /**
     * The email address of the location.
     *
     * Urlencoded email address is expected.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The phone number of the business, staff and location.
     *
     * Urlencoded phone number is expected.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
