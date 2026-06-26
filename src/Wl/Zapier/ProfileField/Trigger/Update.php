<?php

namespace WlSdk\Wl\Zapier\ProfileField\Trigger;

use WlSdk\WlSdkClient;

/**
 * Returns sample data for trigger.
 */
class Update
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
     * @return UpdateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UpdateGetRequest $request): UpdateGetResponse
    {
        return new UpdateGetResponse($this->client->request('/Wl/Zapier/ProfileField/Trigger/Update.json', $request->params(), 'GET'));
    }

    /**
     * Makes webhook subscribe action.
     *
     * @return UpdatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UpdatePostRequest $request): UpdatePostResponse
    {
        return new UpdatePostResponse($this->client->request('/Wl/Zapier/ProfileField/Trigger/Update.json', $request->params(), 'POST'));
    }

    /**
     * Makes webhook unsubscribe action.
     *
     * @return UpdateDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(UpdateDeleteRequest $request): UpdateDeleteResponse
    {
        return new UpdateDeleteResponse($this->client->request('/Wl/Zapier/ProfileField/Trigger/Update.json', $request->params(), 'DELETE'));
    }
}
