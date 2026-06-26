<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Remove\Trigger;

use WlSdk\WlSdkClient;

/**
 * Returns sample data for trigger.
 */
class Remove
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns sample data for trigger.
     *
     * @return RemoveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RemoveGetRequest $request): RemoveGetResponse
    {
        return new RemoveGetResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Trigger/Remove.json', $request->params(), 'GET'));
    }

    /**
     * Makes webhook subscribe action.
     *
     * @return RemovePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RemovePostRequest $request): RemovePostResponse
    {
        return new RemovePostResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Trigger/Remove.json', $request->params(), 'POST'));
    }

    /**
     * Makes webhook unsubscribe action.
     *
     * @return RemoveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RemoveDeleteRequest $request): RemoveDeleteResponse
    {
        return new RemoveDeleteResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Trigger/Remove.json', $request->params(), 'DELETE'));
    }
}
