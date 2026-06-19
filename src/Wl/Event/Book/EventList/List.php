<?php
namespace WlSdk\Wl\Event\Book\EventList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of events.
 */
class List
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
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Event/Book/EventList/List.json', $request->params(), 'GET'));
    }
}
