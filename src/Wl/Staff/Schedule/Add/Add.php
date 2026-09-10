<?php

namespace WlSdk\Wl\Staff\Schedule\Add;

use WlSdk\WlSdkClient;

/**
 * Saves new time interval.
 */
class Add
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new time interval.
     *
     * Validates the business, location, and staff identifiers, resolving the deprecated `k_staff`
     *  input to `uid_staff` when needed. Checks that the current staff member has access to edit
     *  the target staff schedule, validates the submitted schedule data, and saves the new working
     *  or unavailable time interval.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Staff/Schedule/Add/Add.json', $request->params(), 'POST'));
    }
}
