<?php

namespace WlSdk\Wl\Event\Transfer;

use WlSdk\WlSdkClient;

/**
 * Checks whether users are related.
 */
class EventTransfer
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether users are related.
     *
     * @return EventTransferGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EventTransferGetRequest $request): EventTransferGetResponse
    {
        return new EventTransferGetResponse($this->client->request('/Wl/Event/Transfer/EventTransfer.json', $request->params(), 'GET'));
    }

    /**
     * Transfers purchased event to another user.
     *
     * @return EventTransferPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EventTransferPostRequest $request): EventTransferPostResponse
    {
        return new EventTransferPostResponse($this->client->request('/Wl/Event/Transfer/EventTransfer.json', $request->params(), 'POST'));
    }
}
