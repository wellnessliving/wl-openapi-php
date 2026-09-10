<?php

namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Cancels book of session {@link \WlSdk\Wl\Event\EventCancel}.
 */
class EventCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels book of session {@link \WlSdk\Wl\Event\EventCancel}.
     *
     * Validates the business and visit keys, checks that the visit is still in a cancellable
     *  state, and verifies that the current user has access to cancel it. Loads the attendance
     *  record for the visit and delegates the actual cancellation to the event service.
     *
     * @return EventCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EventCancelPostRequest $request): EventCancelPostResponse
    {
        return new EventCancelPostResponse($this->client->request('/Wl/Event/EventCancel.json', $request->params(), 'POST'));
    }
}
