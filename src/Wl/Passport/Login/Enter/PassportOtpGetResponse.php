<?php

namespace WlSdk\Wl\Passport\Login\Enter;

/**
 * Response from GET
 */
class PassportOtpGetResponse
{
    /**
     * Delivery channel that was selected based on the given priorities and user data.
     *
     * Fixed values `sms` and `email` are supported. Only one value is returned.
     *
     * @var string|null
     */
    public ?string $text_delivery_selected = null;

    /**
     * Phone number masked with `*` symbols in case if we have priority sending and sms sending was selected.
     *
     * @var string|null
     */
    public ?string $text_phone_masked = null;

    public function __construct(array $data)
    {
        $this->text_delivery_selected = isset($data['text_delivery_selected']) ? (string)$data['text_delivery_selected'] : null;
        $this->text_phone_masked = isset($data['text_phone_masked']) ? (string)$data['text_phone_masked'] : null;
    }
}
