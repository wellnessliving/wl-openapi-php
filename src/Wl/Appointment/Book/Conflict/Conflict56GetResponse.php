<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

/**
 * Response from GET
 */
class Conflict56GetResponse
{
    /**
     * List of appointment booking conflicts.
     *
     * Based on the result of , with
     *  additional entries for client age restriction conflicts. Each element:
     *
     * @var Conflict56GetResponseConflict[]|null
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
        $this->a_conflict = isset($data['a_conflict']) ? array_map(static fn ($item) => new Conflict56GetResponseConflict((array)$item), (array)$data['a_conflict']) : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
