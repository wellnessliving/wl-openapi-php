<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastK
{
    /**
     * Session end date/time.
     *
     * @var string|null
     */
    public ?string $dtl_end = null;

    /**
     * Session start date/time.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * Key of the changed appointment.
     * Is set only if changed session is appointment.
     * 
     * `null` if changed session is not an appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the changed class session.
     * Is set only if changed session is class.
     * 
     * `null` if changed session is not a class.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function __construct(array $data)
    {
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
    }
}
