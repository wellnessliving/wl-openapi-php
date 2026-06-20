<?php

namespace WlSdk\Wl\Passport\Login\Enter;

class PassportOtpGetRequest
{
    /**
     * Whether OTP code will be sending to user via email.
     * `true` if OTP code is sending through email,
     * `false` if OTP code is sending through phone number.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether OTP code will be sending to user via email.
     *  `true` if OTP code is sending through phone number,
     *  `false` if OTP code is sending through email.
     *
     * @var bool|null
     */
    public ?bool $is_phone = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_mail' => $this->is_mail,
            'is_phone' => $this->is_phone,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
