<?php

namespace WlSdk\Wl\Login\Attendance\Row;

use WlSdk\WlSdkClient;

/**
 * Returns data for a single attendance list row.
 */
class Row
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data for a single attendance list row.
     *
     * Loads the visit, its form statuses and the action URLs for each form
     * that is linked to the visit. The render mode and the URLs follow the
     * same gates as the legacy appointment panel.
     *
     * @return RowGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RowGetRequest $request): RowGetResponse
    {
        return new RowGetResponse($this->client->request('/Wl/Login/Attendance/Row/Row.json', $request->params(), 'GET'));
    }
}
