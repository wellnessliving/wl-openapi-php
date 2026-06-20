<?php

namespace WlSdk\Wl\Event\Book\EventList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of events.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of events.
     *
     * Used to populate the events tab on the client-facing booking page. Returns all events offered in
     * the business (or filtered to a specific tab), together with availability flags so the UI can
     * show which events still have open spots.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Event/Book/EventList/List.json', $request->params(), 'GET'));
    }
}
