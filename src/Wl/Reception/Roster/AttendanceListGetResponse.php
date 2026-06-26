<?php

namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from GET
 */
class AttendanceListGetResponse
{
    /**
     * List of clients that registered on class each element contains information:
     *
     *
     * `null` if not defined yet.
     *
     * @var AttendanceListGetResponseClient[]|null
     */
    public ?array $a_client = null;

    public function __construct(array $data)
    {
        $this->a_client = isset($data['a_client']) ? array_map(static fn ($item) => new AttendanceListGetResponseClient((array)$item), (array)$data['a_client']) : null;
    }
}
