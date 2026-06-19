<?php
namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Adds a user to a group.
 */
class UserGroupPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds a user to a group.
     *
     * Assigns the specified user to the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return UserGroupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UserGroupPostRequest $request): UserGroupPostResponse
    {
        return new UserGroupPostResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $request->params(), 'POST'));
    }
}
