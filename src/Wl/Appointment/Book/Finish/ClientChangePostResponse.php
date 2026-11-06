<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

/**
 * Response from POST
 */
class ClientChangePostResponse
{
    /**
     * The booked appointments. Every element has the key:
     *
     * @var ClientChangePostResponseAppointment[]|null
     */
    public ?array $a_appointment = null;

    /**
     * The activity IDs of bookings that have been made.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity_visit = null;

    /**
     * The visit IDs of the newly booked appointments.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * Keys of booked visits.
     *
     * Structured into a two-dimensional array.
     * 1st dimension - providers; 2nd dimension - visit keys inside a provider.
     *
     * @var string[][]|null
     */
    public ?array $a_visit_provider = null;

    public function __construct(array $data)
    {
        $this->a_appointment = isset($data['a_appointment']) ? array_map(static fn ($item) => new ClientChangePostResponseAppointment((array)$item), (array)$data['a_appointment']) : null;
        $this->a_login_activity_visit = isset($data['a_login_activity_visit']) ? (array)$data['a_login_activity_visit'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->a_visit_provider = isset($data['a_visit_provider']) ? (array)$data['a_visit_provider'] : null;
    }
}
