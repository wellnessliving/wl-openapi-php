<?php

namespace WlSdk\Core\Passport\Mfa;

class MfaActivatePostRequest
{
    /**
     * Key of the MFA device to activate.
     *
     * Primary key in MfaDeviceSql.
     *
     * @var string|null
     */
    public ?string $k_mfa_device = null;

    /**
     * The first OTP code.
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
