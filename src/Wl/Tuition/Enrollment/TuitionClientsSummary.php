<?php

namespace WlSdk\Wl\Tuition\Enrollment;

use WlSdk\WlSdkClient;

/**
 * Returns summary of clients and events enrolled for the given tuitions.
 */
class TuitionClientsSummary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns summary of clients and events enrolled for the given tuitions.
     *
     * For each requested tuition, returns the number of unique clients enrolled in at least one not cancelled
     * event, the number of unique events with at least one not cancelled enrollment, and the total number of
     * not cancelled event enrollments.
     *
     * @return TuitionClientsSummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TuitionClientsSummaryGetRequest $request): TuitionClientsSummaryGetResponse
    {
        return new TuitionClientsSummaryGetResponse($this->client->request('/Wl/Tuition/Enrollment/TuitionClientsSummary.json', $request->params(), 'GET'));
    }
}
