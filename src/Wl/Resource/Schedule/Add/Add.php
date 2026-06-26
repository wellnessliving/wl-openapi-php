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
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Resource/Schedule/Add/Add.json', $request->params(), 'POST'));
    }
}
