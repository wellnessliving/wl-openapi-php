<?php

namespace WlSdk\Wl\Passport\Login\Enter;

class PassportOtpGetRequest
{
    /**
     * Type of delivery strategy from {@link \WlSdk\Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum
     */
    public ?int $id_delivery_strategy = null;

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
     * Priority of delivery.
     *
     * Fixed values `sms` and `email` are supported.
     * Should be given in priority order comma-separated.
     *
     * @var string|null
     */
    public ?string $text_delivery_priority = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'id_delivery_strategy' => $this->id_delivery_strategy,
            'is_mail' => $this->is_mail,
            'is_phone' => $this->is_phone,
            'k_business' => $this->k_business,
            'text_delivery_priority' => $this->text_delivery_priority,
            'text_mail' => $this->text_mail,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
