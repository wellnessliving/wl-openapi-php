<?php

namespace WlSdk\Wl\AiAgent\Alert;

use WlSdk\WlSdkClient;

/**
 * Fires an in-app alert for the specified event.
 */
class Alert
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Fires an in-app alert for the specified event.
     *
     * Triggers the alert that appears in the business `Alert Center` for staff members with appropriate access.
     * Requires the business to have an active `AI Agent` subscription.
     *
     * @return AlertPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AlertPostRequest $request): AlertPostResponse
    {
        return new AlertPostResponse($this->client->request('/Wl/AiAgent/Alert/Alert.json', $request->params(), 'POST'));
    }
}
