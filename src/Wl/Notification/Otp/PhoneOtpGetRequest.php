<?php
namespace WlSdk\Wl\Notification\Otp;

class PhoneOtpGetRequest
{
    /**
     * Phone number to be validated.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
