<?php
namespace WlSdk\Wl\Passport\Login\Register;

class RegisterOtpPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Otp code integer that was random generated.
     *
     * @var string|null
     */
    public ?string $s_otp_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
