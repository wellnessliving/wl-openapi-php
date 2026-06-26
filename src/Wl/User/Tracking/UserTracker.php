<?php

namespace WlSdk\Wl\User\Tracking;

use WlSdk\WlSdkClient;

/**
 * This method updates screen resolution.
 */
class UserTracker
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method updates screen resolution.
     *
     * @return UserTrackerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserTrackerGetRequest $request): UserTrackerGetResponse
    {
        return new UserTrackerGetResponse($this->client->request('/Wl/User/Tracking/UserTracker.json', $request->params(), 'GET'));
    }

    /**
     * Starts or stops tracking.
     *
     * @return UserTrackerPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UserTrackerPostRequest $request): UserTrackerPostResponse
    {
        return new UserTrackerPostResponse($this->client->request('/Wl/User/Tracking/UserTracker.json', $request->params(), 'POST'));
    }

    /**
     * Updates tracking of a user flow.
     *
     * @return UserTrackerPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(UserTrackerPutRequest $request): UserTrackerPutResponse
    {
        return new UserTrackerPutResponse($this->client->request('/Wl/User/Tracking/UserTracker.json', $request->params(), 'PUT'));
    }
}
