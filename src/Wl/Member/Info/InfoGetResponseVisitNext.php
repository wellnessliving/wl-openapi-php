<?php
namespace WlSdk\Wl\Member\Info;

class InfoGetResponseVisitNext
{
    /**
     * Datetime visit in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_visit = null;

    /**
     * Appointment key.
     * `null` if it is not service or asset session.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Class period key.
     * `null` if it is not class or event session.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->dtu_visit = isset($data['dtu_visit']) ? (string)$data['dtu_visit'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
