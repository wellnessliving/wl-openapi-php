<?php

namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about users by email.
 */
class UserListInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about users by email.
     *
     * Searches for users with the given email address (or an email inherited from a relative)
     *  across every business in the franchise, and returns their profile, address, and contact
     *  information keyed by a combination of business key and UID.
     *
     * @return UserListInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserListInfoGetRequest $request): UserListInfoGetResponse
    {
        return new UserListInfoGetResponse($this->client->request('/Wl/User/Info/UserListInfo.json', $request->params(), 'GET'));
    }
}
