<?php

namespace WlSdk\Wl\Passport\Login\Enter;

class PassportOtpPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email of an existing account, to use instead of {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp}.
     *
     * Empty to give the user by {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp}. When the email is given,
     * {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp}
     * must be empty. Spaces around the email are ignored. At most 255 characters, the size of the email of an
     * account.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
            'text_mail' => $this->text_mail,
            'uid' => $this->uid,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
