<?php
namespace WlSdk\Wl\Notification\Otp;

class PhoneOtpPostRequest
{
    /**
     * Phone number to be validated.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Otp code integer that user entered on the form. Will be compared with otp code, which was sent previously.
     *
     * @var string|null
     */
    public ?string $s_otp_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_phone' => $this->text_phone,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
