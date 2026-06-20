<?php
namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceList52GetResponseServiceConfig
{
    /**
     * `true` if this service supports back-to-back booking.
     *
     * @var bool|null
     */
    public ?bool $is_back_to_back = null;

    /**
     * `true` if clients can book this service on a recurring basis.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_client = null;

    /**
     * `true` if appointment bookings for this service default to weekly recurring with no end date.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_no_end_date_appointment = null;

    /**
     * `true` if multiple bookings are allowed for this service.
     *
     * @var bool|null
     */
    public ?bool $is_multiple_booking = null;

    /**
     * `true` if clients on the wait list do not have to pay upfront.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_unpaid = null;

    public function __construct(array $data)
    {
        $this->is_back_to_back = isset($data['is_back_to_back']) ? (bool)$data['is_back_to_back'] : null;
        $this->is_book_repeat_client = isset($data['is_book_repeat_client']) ? (bool)$data['is_book_repeat_client'] : null;
        $this->is_book_repeat_no_end_date_appointment = isset($data['is_book_repeat_no_end_date_appointment']) ? (bool)$data['is_book_repeat_no_end_date_appointment'] : null;
        $this->is_multiple_booking = isset($data['is_multiple_booking']) ? (bool)$data['is_multiple_booking'] : null;
        $this->is_wait_list_unpaid = isset($data['is_wait_list_unpaid']) ? (bool)$data['is_wait_list_unpaid'] : null;
    }
}
