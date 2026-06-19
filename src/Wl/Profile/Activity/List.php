<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of activity items to show in user profile.
 */
class List
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of activity items to show in user profile.
     *
     * Returns the client's activity history for the specified business, filtered by an optional
     *  date range. Requires profile-view access and respects activity-type visibility rules for the
     *  requesting user.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Profile/Activity/List.json', $request->params(), 'GET'));
    }
}
