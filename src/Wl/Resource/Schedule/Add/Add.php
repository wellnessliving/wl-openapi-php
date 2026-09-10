<?php

namespace WlSdk\Wl\Resource\Schedule\Add;

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
     * Validates the business, location, and resource, checks that the resource is active,
     *  belongs to the given location, and that the current login has edit access, then creates
     *  the working or non-working schedule for each selected day and returns the created
     *  resource period keys.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Resource/Schedule/Add/Add.json', $request->params(), 'POST'));
    }
}
