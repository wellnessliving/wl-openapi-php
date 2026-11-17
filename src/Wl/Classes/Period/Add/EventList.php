<?php

namespace WlSdk\Wl\Classes\Period\Add;

use WlSdk\WlSdkClient;

/**
 * Returns list of events in which the current user can schedule a new instance.
 */
class EventList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of events in which the current user can schedule a new instance.
     *
     * Used by the "Schedule event" dialog of the Schedule tab. Only active events are listed, one entry for each
     * enrollment block. "Manage events" is not required, but the user must be able to schedule future events.
     *
     * @return EventListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EventListGetRequest $request): EventListGetResponse
    {
        return new EventListGetResponse($this->client->request('/Wl/Classes/Period/Add/EventList.json', $request->params(), 'GET'));
    }
}
