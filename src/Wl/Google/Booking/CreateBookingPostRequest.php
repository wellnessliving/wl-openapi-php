<?php

namespace WlSdk\Wl\Google\Booking;

class CreateBookingPostRequest
{
    /**
     * Information about payments. When payment authorizations are handled by
     * Google, if the booking request does not succeed, payment authorizations are
     * automatically canceled. (optional)
     *
     * `null` if not specified.
     *
     * @var array|null
     */
    public ?array $o_payment_information = null;

    /**
     * The inventory slot that is being requested to make this booking.
     *
     * Slot is provided for the partner to verify the lease information.
     *
     * @var array|null
     */
    public ?array $o_slot = null;

    /**
     * Personal information of the user making the appointment.
     *
     * @var array|null
     */
    public ?array $o_user_information = null;

    /**
     * A string from the user which contains any special requests or additional
     * information that they would like to notify the merchant about. (optional)
     *
     * `null` if not specified.
     *
     * @var string|null
     */
    public ?string $text_additional_request = null;

    /**
     * Partner provided deal id associated with this slot. (optional).
     *
     * `null` if not specified.
     *
     * @var string|null
     */
    public ?string $text_deal_id = null;

    /**
     * Idempotency token for requests.
     *
     * @var string|null
     */
    public ?string $text_idempotency_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'o_payment_information' => $this->o_payment_information,
            'o_slot' => $this->o_slot,
            'o_user_information' => $this->o_user_information,
            'text_additional_request' => $this->text_additional_request,
            'text_deal_id' => $this->text_deal_id,
            'text_idempotency_token' => $this->text_idempotency_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
