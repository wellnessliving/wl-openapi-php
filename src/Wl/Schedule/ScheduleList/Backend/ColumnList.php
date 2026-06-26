<?php

namespace WlSdk\Wl\Schedule\ScheduleList\Backend;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Schedule/ScheduleList/Backend/ColumnList.json
 */
class ColumnList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Schedule/ScheduleList/Backend/ColumnList.json.
     *
     * @return ColumnListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ColumnListGetRequest $request): ColumnListGetResponse
    {
        return new ColumnListGetResponse($this->client->request('/Wl/Schedule/ScheduleList/Backend/ColumnList.json', $request->params(), 'GET'));
    }

    /**
     * Saves columns position.
     *
     * @return ColumnListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ColumnListPostRequest $request): ColumnListPostResponse
    {
        return new ColumnListPostResponse($this->client->request('/Wl/Schedule/ScheduleList/Backend/ColumnList.json', $request->params(), 'POST'));
    }
}
