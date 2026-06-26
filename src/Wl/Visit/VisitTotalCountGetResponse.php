<?php

namespace WlSdk\Wl\Visit;

/**
 * Response from GET
 */
class VisitTotalCountGetResponse
{
    /**
     * Total number of visits.
     *
     * Sum of attended visits in RsVisitSql and historical visits
     *  in VisitHistoricalCountSql.
     *
     * @var int|null
     */
    public ?int $i_visit_total = null;

    public function __construct(array $data)
    {
        $this->i_visit_total = isset($data['i_visit_total']) ? (int)$data['i_visit_total'] : null;
    }
}
