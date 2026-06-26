<?php

namespace WlSdk\Wl\Alert;

use WlSdk\WlSdkClient;

/**
 * Returns all alerts for the user.
 */
class AlertList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all alerts for the user.
     *
     * @return AlertListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AlertListGetRequest $request): AlertListGetResponse
    {
        return new AlertListGetResponse($this->client->request('/Wl/Alert/AlertList.json', $request->params(), 'GET'));
    }

    /**
     * Sets alerts as already read.
     *
     * @return AlertListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AlertListPostRequest $request): AlertListPostResponse
    {
        return new AlertListPostResponse($this->client->request('/Wl/Alert/AlertList.json', $request->params(), 'POST'));
    }
}
