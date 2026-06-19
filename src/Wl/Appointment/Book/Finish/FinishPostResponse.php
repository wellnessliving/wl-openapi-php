<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

/**
 * Response from POST
 */
class FinishPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_appointment = null;

    /**
     * The activity keys of the bookings that were made.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity_visit = null;

    /**
     * The keys of visits.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_visit_payment = null;

    public function __construct(array $data)
    {
        $this->a_appointment = isset($data['a_appointment']) ? (array)$data['a_appointment'] : null;
        $this->a_login_activity_visit = isset($data['a_login_activity_visit']) ? (array)$data['a_login_activity_visit'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->a_visit_payment = isset($data['a_visit_payment']) ? (array)$data['a_visit_payment'] : null;
    }
}
