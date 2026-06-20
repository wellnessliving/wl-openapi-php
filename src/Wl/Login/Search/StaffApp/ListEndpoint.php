<?php

namespace WlSdk\Wl\Login\Search\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Performs access checks and returns a list of users, depending on the search query.
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
     * Performs access checks and returns a list of users, depending on the search query.
     *
     * When a search string is provided, returns clients whose name or email matches the query within the specified
     * business. When the search string is empty, returns recently viewed clients. Each result includes the
     * client's
     * name, email, phone, member ID, and user key.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Login/Search/StaffApp/List.json', $request->params(), 'GET'));
    }
}
