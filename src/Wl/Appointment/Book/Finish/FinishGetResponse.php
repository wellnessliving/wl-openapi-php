<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

/**
 * Response from GET
 */
class FinishGetResponse
{
    /**
     * Information for sending an appointment notification.
     *
     * @var FinishGetResponseNotification|null
     */
    public ?FinishGetResponseNotification $a_notification = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_notification = isset($data['a_notification']) ? new FinishGetResponseNotification((array)$data['a_notification']) : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
