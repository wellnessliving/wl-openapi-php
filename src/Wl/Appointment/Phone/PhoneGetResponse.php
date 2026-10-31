<?php

namespace WlSdk\Wl\Appointment\Phone;

/**
 * Response from GET
 */
class PhoneGetResponse
{
    /**
     * The phone number.
     *
     * In a PUT request, the number in any format. In results, the number in the standard form.
     * `null` if there is no number or the booking is not a Phone Call.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function __construct(array $data)
    {
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
    }
}
