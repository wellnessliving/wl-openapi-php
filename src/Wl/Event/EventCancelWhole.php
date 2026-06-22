<?php

namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Cancels book of event [EventCancelWholeApi](/Wl/Event/EventCancelWhole.json).
 */
class EventCancelWhole
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels book of event [EventCancelWholeApi](/Wl/Event/EventCancelWhole.json).
     *
     * Used when a client wants to drop out of a multi-session event entirely. Cancels all remaining
     * upcoming sessions at once, including any waitlisted spots, without requiring the client to cancel
     * each session individually.
     *
     * @return EventCancelWholePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EventCancelWholePostRequest $request): EventCancelWholePostResponse
    {
        return new EventCancelWholePostResponse($this->client->request('/Wl/Event/EventCancelWhole.json', $request->params(), 'POST'));
    }
}
