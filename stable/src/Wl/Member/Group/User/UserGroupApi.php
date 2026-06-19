<?php
namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Gets information about all groups to which the specified user belongs.
 */
class UserGroupApi
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of a user.
     *
     * @var string|null
     */
    public ?string $uid_user = null;

    /**
     * Member group key. Use special value 'quick' to add/remove the user to/from the quick group.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

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
     * @return UserGroupApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): UserGroupApiGetResponse
    {
        return new UserGroupApiGetResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'GET'));
    }

    /**
     * Adds a user to a group.
     *
     * Assigns the specified user to the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return UserGroupApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): UserGroupApiPostResponse
    {
        return new UserGroupApiPostResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'POST'));
    }

    /**
     * Deletes the user from the group.
     *
     * Removes the specified user from the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return UserGroupApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): UserGroupApiDeleteResponse
    {
        return new UserGroupApiDeleteResponse($this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_user' => $this->uid_user,
            'k_member_group' => $this->k_member_group,
            ],
            static fn($v) => $v !== null
        );
    }
}
