<?php

namespace WlSdk\Core\Passport\Mfa;

class MfaEnterPostRequest
{
    /**
     * Key of the MFA device to check OTP code with.
     *
     * Primary key in MfaDeviceSql.
     *
     * @var string|null
     */
    public ?string $k_mfa_device = null;

    /**
     * Value of the OTP code to check.
     *
     * @var string|null
     */
    public ?string $s_otp = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_mfa_device' => $this->k_mfa_device,
            's_otp' => $this->s_otp,
            ],
            static fn ($v) => $v !== null
        );
    }
}
