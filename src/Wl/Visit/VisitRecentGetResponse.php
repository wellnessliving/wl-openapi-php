<?php

namespace WlSdk\Wl\Visit;

/**
 * Response from GET
 */
class VisitRecentGetResponse
{
    /**
     * Date and time of the last attended visit in UTC, excluding today's gym visits.
     *
     * Empty string if there are no qualifying visits.
     *
     * @var string|null
     */
    public ?string $dtu_visit_last = null;

    /**
     * Number of attended visits in the last 30 days.
     *
     * The 30-day window starts at the beginning of the day 29 days ago on the clock of the location
     *  given in {@link \WlSdk\Wl\Visit\VisitRecent} and ends at the end of today on that clock.
     *
     * @var int|null
     */
    public ?int $i_visit_month = null;

    /**
     * Number of attended visits in the last 7 days.
     *
     * The 7-day window starts at the beginning of the day 6 days ago on the clock of the location
     *  given in {@link \WlSdk\Wl\Visit\VisitRecent} and ends at the end of today on that clock.
     *
     * @var int|null
     */
    public ?int $i_visit_week = null;

    /**
     * Location key of the last attended visit, excluding today's gym visits.
     *
     * Empty string if there are no qualifying visits.
     *
     * @var string|null
     */
    public ?string $k_location_visit_last = null;

    public function __construct(array $data)
    {
        $this->dtu_visit_last = isset($data['dtu_visit_last']) ? (string)$data['dtu_visit_last'] : null;
        $this->i_visit_month = isset($data['i_visit_month']) ? (int)$data['i_visit_month'] : null;
        $this->i_visit_week = isset($data['i_visit_week']) ? (int)$data['i_visit_week'] : null;
        $this->k_location_visit_last = isset($data['k_location_visit_last']) ? (string)$data['k_location_visit_last'] : null;
    }
}
