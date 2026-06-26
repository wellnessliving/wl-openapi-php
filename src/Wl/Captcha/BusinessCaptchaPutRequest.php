<?php

namespace WlSdk\Wl\Captcha;

class BusinessCaptchaPutRequest
{
    /**
     * `true` if captcha is enabled for the business, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_captcha_enable = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_captcha_enable' => $this->is_captcha_enable,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
