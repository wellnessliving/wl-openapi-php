<?php

namespace WlSdk\Wl\Schedule\Page;

use WlSdk\WlSdkClient;

/**
 * Retrieves items of schedule for the client.
 */
class PageList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves items of schedule for the client.
     *
     * Returns the client's upcoming or past visits for a given business, ordered by date. Supports
     * optional date range boundaries to retrieve visits within a specific window. Used to populate
     * the schedule history and upcoming bookings pages in the client portal.
     *
     * @return PageListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PageListGetRequest $request): PageListGetResponse
    {
        return new PageListGetResponse($this->client->request('/Wl/Schedule/Page/PageList.json', $request->params(), 'GET'));
    }
}
