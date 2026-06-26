<?php

namespace WlSdk\Wl\Zapier\Lead\Trigger;

use WlSdk\WlSdkClient;

/**
 * Returns sample data for trigger.
 */
class Create
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
     * @return CreateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CreateGetRequest $request): CreateGetResponse
    {
        return new CreateGetResponse($this->client->request('/Wl/Zapier/Lead/Trigger/Create.json', $request->params(), 'GET'));
    }

    /**
     * Makes webhook subscribe action.
     *
     * @return CreatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreatePostRequest $request): CreatePostResponse
    {
        return new CreatePostResponse($this->client->request('/Wl/Zapier/Lead/Trigger/Create.json', $request->params(), 'POST'));
    }

    /**
     * Makes webhook unsubscribe action.
     *
     * @return CreateDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CreateDeleteRequest $request): CreateDeleteResponse
    {
        return new CreateDeleteResponse($this->client->request('/Wl/Zapier/Lead/Trigger/Create.json', $request->params(), 'DELETE'));
    }
}
