<?php

namespace WlSdk\Wl\Schedule\Tab;

use WlSdk\WlSdkClient;

/**
 * Gets information about tabs for page "Book now".
 */
class Tab
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about tabs for page "Book now".
     *
     * Returns the set of service booking tabs configured by the business, filtered for the
     * specified location and user. Used to populate the tab strip on the "Book Now" page or
     * embedded widget. Tabs may represent classes, appointments, events, or other bookable services.
     *
     * @return TabGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TabGetRequest $request): TabGetResponse
    {
        return new TabGetResponse($this->client->request('/Wl/Schedule/Tab/Tab.json', $request->params(), 'GET'));
    }
}
