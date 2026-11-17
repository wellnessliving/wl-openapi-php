<?php

namespace WlSdk\Wl\Appointment\Phone;

class PhonePutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * Empty in a GET request means the default number for a future booking.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The phone number.
     *
     * In a PUT request, the number in any format. In results, the number in the standard form.
     * `null` if there is no number or the booking is not a Phone Call.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'text_phone' => $this->text_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
