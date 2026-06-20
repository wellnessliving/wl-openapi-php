<?php
namespace WlSdk\Wl\Profile\Attendance;

class AttendanceOverlapGetResponseVisitList
{
    /**
     * Date and time of the visit.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Duration of a service.
     *
     * @var string|null
     */
    public ?string $i_duration = null;

    /**
     * End datetime of the visit in unix format.
     *
     * @var string|null
     */
    public ?string $i_end = null;

    /**
     * Local end datetime of the visit in unix format.
     *
     * @var string|null
     */
    public ?string $i_end_local = null;

    /**
     * Start datetime of the visit in unix format.
     *
     * @var string|null
     */
    public ?string $i_start = null;

    /**
     * Local start datetime of the visit in unix format.
     *
     * @var string|null
     */
    public ?string $i_start_local = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Enrollment book key.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Title of a service
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->i_duration = isset($data['i_duration']) ? (string)$data['i_duration'] : null;
        $this->i_end = isset($data['i_end']) ? (string)$data['i_end'] : null;
        $this->i_end_local = isset($data['i_end_local']) ? (string)$data['i_end_local'] : null;
        $this->i_start = isset($data['i_start']) ? (string)$data['i_start'] : null;
        $this->i_start_local = isset($data['i_start_local']) ? (string)$data['i_start_local'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_enrollment_book = isset($data['k_enrollment_book']) ? (string)$data['k_enrollment_book'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
