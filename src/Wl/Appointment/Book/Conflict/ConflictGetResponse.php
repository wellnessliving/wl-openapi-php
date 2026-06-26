<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

/**
 * Response from GET
 */
class ConflictGetResponse
{
    /**
     * See for RsAppointmentEditConflict::checkAvailability() details.
     *
     * @var array[]|null
     */
    public ?array $a_conflict = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_conflict = isset($data['a_conflict']) ? (array)$data['a_conflict'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
