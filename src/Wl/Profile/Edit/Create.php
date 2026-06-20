<?php

namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Creates a new user.
 */
class Create
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new user.
     *
     * Creates a new user account with the given email, first name, and last name in the specified
     *  business, registers the user as a member, and returns the `uid` of the created or existing
     *  user.
     *
     * @return CreatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreatePostRequest $request): CreatePostResponse
    {
        return new CreatePostResponse($this->client->request('/Wl/Profile/Edit/Create.json', $request->params(), 'POST'));
    }
}
