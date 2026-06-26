<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Add\Trigger;

use WlSdk\WlSdkClient;

/**
 * Returns sample data for trigger.
 */
class Add
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
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Trigger/Add.json', $request->params(), 'GET'));
    }

    /**
     * Makes webhook subscribe action.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Trigger/Add.json', $request->params(), 'POST'));
    }

    /**
     * Makes webhook unsubscribe action.
     *
     * @return AddDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AddDeleteRequest $request): AddDeleteResponse
    {
        return new AddDeleteResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Trigger/Add.json', $request->params(), 'DELETE'));
    }
}
