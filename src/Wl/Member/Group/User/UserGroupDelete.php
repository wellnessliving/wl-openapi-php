<?php
namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Deletes the user from the group.
 */
class UserGroupDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the user from the group.
     *
     * Removes the specified user from the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return UserGroupDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(UserGroupDeleteRequest $request): UserGroupDeleteResponse
    {
        return new UserGroupDeleteResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $request->params(), 'DELETE'));
    }
}
