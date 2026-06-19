<?php
namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Returns the list of events matching the specified filter parameters.
 */
class EventListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of events matching the specified filter parameters.
     *
     * Used to display the event schedule on business and location pages. Supports filtering by location,
     * date range, staff, and booking status. Results are cached per business and user context; the cache
     * is invalidated automatically when events are modified.
     *
     * @return EventListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EventListGetRequest $request): EventListGetResponse
    {
        return new EventListGetResponse($this->client->request('/Wl/Event/EventList.json', $request->params(), 'GET'));
    }
}
