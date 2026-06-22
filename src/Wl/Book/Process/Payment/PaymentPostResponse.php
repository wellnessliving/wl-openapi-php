<?php

namespace WlSdk\Wl\Book\Process\Payment;

/**
 * Response from POST
 */
class PaymentPostResponse
{
    /**
     * Keys of the user's activity which correspond to bookings made.
     * Not empty when the booking process is finished.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity_book = null;

    /**
     * The keys of bookings made.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * Values are arrays with next keys:
     *
     * @var PaymentPostResponseVisitPayment[]|null
     */
    public ?array $a_visit_payment = null;

    /**
     * The keys of the user's activity corresponding to the purchase made. This won't be empty when the booking
     * process is finished.
     *
     * @var string|null
     */
    public ?string $k_login_activity_purchase = null;

    public function __construct(array $data)
    {
        $this->a_login_activity_book = isset($data['a_login_activity_book']) ? (array)$data['a_login_activity_book'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->a_visit_payment = isset($data['a_visit_payment']) ? array_map(static fn ($item) => new PaymentPostResponseVisitPayment((array)$item), (array)$data['a_visit_payment']) : null;
        $this->k_login_activity_purchase = isset($data['k_login_activity_purchase']) ? (string)$data['k_login_activity_purchase'] : null;
    }
}
