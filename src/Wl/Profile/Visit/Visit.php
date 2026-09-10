<?php

namespace WlSdk\Wl\Profile\Visit;

use WlSdk\WlSdkClient;

/**
 * Registers a visit to user profile by current user.
 */
class Visit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Registers a visit to user profile by current user.
     *
     * This is used to show a list of users that current user has recently visited in search results.
     *
     * @return VisitPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VisitPostRequest $request): VisitPostResponse
    {
        return new VisitPostResponse($this->client->request('/Wl/Profile/Visit/Visit.json', $request->params(), 'POST'));
    }
}
