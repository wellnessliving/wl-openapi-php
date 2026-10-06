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
     * Validates that the user has access to the business, then loads the alert list for the current
     *  user. Additional alert data needed to make alerts tappable is included only when the request
     *  comes from the staff backend.
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
     * Validates that the user has access to the business and that any provided alert keys are valid,
     *  marks the specified alerts (or all alerts when none are specified) as read, and sends the
     *  updated unread alert count to the client.
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
