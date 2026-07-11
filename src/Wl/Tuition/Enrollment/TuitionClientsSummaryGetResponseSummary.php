<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionClientsSummaryGetResponseSummary
{
    /**
     * Number of unique clients having at least one not cancelled enrolled event.
     *
     * @var int|null
     */
    public ?int $i_clients_enrolled = null;

    /**
     * Total number of not cancelled event enrollments.
     *
     * @var int|null
     */
    public ?int $i_enrolled_total = null;

    /**
     * Number of unique events having at least one not cancelled enrollment.
     *
     * @var int|null
     */
    public ?int $i_events_unique = null;

    public function __construct(array $data)
    {
        $this->i_clients_enrolled = isset($data['i_clients_enrolled']) ? (int)$data['i_clients_enrolled'] : null;
        $this->i_enrolled_total = isset($data['i_enrolled_total']) ? (int)$data['i_enrolled_total'] : null;
        $this->i_events_unique = isset($data['i_events_unique']) ? (int)$data['i_events_unique'] : null;
    }
}
