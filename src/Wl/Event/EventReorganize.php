<?php

namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class EventReorganize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return EventReorganizePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EventReorganizePostRequest $request): EventReorganizePostResponse
    {
        return new EventReorganizePostResponse($this->client->request('/Wl/Event/EventReorganize.json', $request->params(), 'POST'));
    }
}
