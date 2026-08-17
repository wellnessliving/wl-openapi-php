<?php

namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Returns a list of clients enrolled in the specified event classes.
 */
class EventEnrollment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of clients enrolled in the specified event classes.
     *
     * An enrollment is considered to exist for any client that has an active (not canceled, not missed) visit,
     * past or future, for one of the specified classes.
     *
     * @return EventEnrollmentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EventEnrollmentGetRequest $request): EventEnrollmentGetResponse
    {
        return new EventEnrollmentGetResponse($this->client->request('/Wl/Event/EventEnrollment.json', $request->params(), 'GET'));
    }
}
