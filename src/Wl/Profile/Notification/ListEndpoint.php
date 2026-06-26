<?php

namespace WlSdk\Wl\Profile\Notification;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of push notification items to show in user profile.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of push notification items to show in user profile.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Profile/Notification/List.json', $request->params(), 'GET'));
    }
}
