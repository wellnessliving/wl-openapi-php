<?php

namespace WlSdk\Wl\Login\Attendance\Row;

use WlSdk\WlSdkClient;

/**
 * This method is called to process GET query.
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
     * This method is called to process GET query.
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
