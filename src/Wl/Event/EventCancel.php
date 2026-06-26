<?php

namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Cancels book of session `k_visit`.
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
     * Cancels book of session `k_visit`.
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
