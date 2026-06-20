<?php
namespace WlSdk\Wl\Passport\Login\Register;

class RegisterOtpGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email address OTP code will be sent to.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone number OTP code will be sent to.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
