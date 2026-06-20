<?php

namespace WlSdk\Wl\Business\Partner;

class PartnerSettingsGetRequest
{
    /**
     * The unique code that a business can provide other businesses to tell them about system.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_code' => $this->text_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
