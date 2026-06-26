<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Profile/Setting/Delete/Delete.json
 */
class Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Profile/Setting/Delete/Delete.json.
     *
     * @return DeleteGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DeleteGetRequest $request): DeleteGetResponse
    {
        return new DeleteGetResponse($this->client->request('/Wl/Profile/Setting/Delete/Delete.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Profile/Setting/Delete/Delete.json.
     *
     * @return DeletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DeletePostRequest $request): DeletePostResponse
    {
        return new DeletePostResponse($this->client->request('/Wl/Profile/Setting/Delete/Delete.json', $request->params(), 'POST'));
    }
}
