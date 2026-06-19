<?php
namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Gets information about all groups to which the specified user belongs.
 */
class UserGroupGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about all groups to which the specified user belongs.
     *
     * Returns the list of member group keys for the given user within the specified business, populating
     * `$a_group_info` with those keys after access validation.
     *
     * @return UserGroupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserGroupGetRequest $request): UserGroupGetResponse
    {
        return new UserGroupGetResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $request->params(), 'GET'));
    }
}
