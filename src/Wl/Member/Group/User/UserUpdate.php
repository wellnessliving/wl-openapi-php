<?php

namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Performs an immediate update of the member group.
 */
class UserUpdate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs an immediate update of the member group.
     *
     * @return UserUpdatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UserUpdatePostRequest $request): UserUpdatePostResponse
    {
        return new UserUpdatePostResponse($this->client->request('/Wl/Member/Group/User/UserUpdate.json', $request->params(), 'POST'));
    }

    /**
     * Enables automatic member group update.
     *
     * When enabled, an instant update is performed and
     *  an update task {@link \WlSdk\Core\Task\CoreTaskNormal} is scheduled for the next day.
     *
     * If disabled, the automatic update task is removed.
     *
     * @return UserUpdatePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(UserUpdatePutRequest $request): UserUpdatePutResponse
    {
        return new UserUpdatePutResponse($this->client->request('/Wl/Member/Group/User/UserUpdate.json', $request->params(), 'PUT'));
    }
}
