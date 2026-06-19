<?php
namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class UserInfoGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user.
     *
     * Returns profile data for a WellnessLiving user, including name, email, phone, photo, gender,
     * login type, custom profile fields, member groups, and calendar integration status. Supports
     * single-user mode and batch mode for loading multiple profiles in one request.
     *
     * @return UserInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserInfoGetRequest $request): UserInfoGetResponse
    {
        return new UserInfoGetResponse($this->client->request('/Wl/User/Info/UserInfo.json', $request->params(), 'GET'));
    }
}
