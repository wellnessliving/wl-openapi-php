<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneGenerateByMaskGetResponsePhone
{
    /**
     * Phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Phone number with mask applied.
     *
     * @var string|null
     */
    public ?string $text_phone_formatted = null;

    public function __construct(array $data)
    {
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_phone_formatted = isset($data['text_phone_formatted']) ? (string)$data['text_phone_formatted'] : null;
    }
}
