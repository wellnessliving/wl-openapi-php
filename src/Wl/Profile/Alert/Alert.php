<?php

namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of notices to show in user's profile.
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
     * Retrieves a list of notices to show in user's profile.
     *
     * Returns `a_alert` (system alerts including unconfirmed contracts) and `a_warning` (login notes
     *  and flags with author and editor information) for the specified user in the given business.
     *
     * @return AlertGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AlertGetRequest $request): AlertGetResponse
    {
        return new AlertGetResponse($this->client->request('/Wl/Profile/Alert/Alert.json', $request->params(), 'GET'));
    }
}
