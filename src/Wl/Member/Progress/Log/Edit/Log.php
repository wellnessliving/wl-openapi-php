<?php

namespace WlSdk\Wl\Member\Progress\Log\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress log data.
 */
class Log
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress log data.
     *
     * Loads field values recorded for the specified user on the given date (defaulting to the business's current
     * local date), and also returns the last date the user entered progress data and whether the viewer is staff.
     *
     * @return LogGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LogGetRequest $request): LogGetResponse
    {
        return new LogGetResponse($this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $request->params(), 'GET'));
    }

    /**
     * Saves progress fields log.
     *
     * Validates and persists the field values for the specified user and date, enforcing access
     * rules (clients cannot edit verified entries), and logs the change when data is modified.
     *
     * @return LogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LogPostRequest $request): LogPostResponse
    {
        return new LogPostResponse($this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $request->params(), 'POST'));
    }
}
