<?php

namespace WlSdk\Wl\Google\Booking;

/**
 * Response from POST
 */
class GetBookingStatusPostResponse
{
    /**
     * ID of the existing booking.
     *
     * @var string|null
     */
    public ?string $s_booking_id = null;

    /**
     * See {@link \WlSdk\Wl\Google\Booking\BookingStatusSid} for documentation.
     *
     * @var string|null
     */
    public ?string $s_booking_status = null;

    /**
     * See {@link \WlSdk\Wl\Google\Booking\PrepaymentStatusSid} for documentation.
     *
     * @var string|null
     */
    public ?string $s_prepayment_status = null;

    public function __construct(array $data)
    {
        $this->s_booking_id = isset($data['s_booking_id']) ? (string)$data['s_booking_id'] : null;
        $this->s_booking_status = isset($data['s_booking_status']) ? (string)$data['s_booking_status'] : null;
        $this->s_prepayment_status = isset($data['s_prepayment_status']) ? (string)$data['s_prepayment_status'] : null;
    }
}
