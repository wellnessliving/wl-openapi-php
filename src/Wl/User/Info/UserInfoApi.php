<?php
namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class UserInfoApi
{
    /**
     * A list of user keys.
     *
     * @var string[]|null
     */
    public ?array $a_user_list = null;

    /**
     * The key of the business.
     * This may be empty if system-wide information is needed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` to ignore cache and load information from the database directly.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $not_cached = null;

    /**
     * The key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return UserInfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): UserInfoApiGetResponse
    {
        return new UserInfoApiGetResponse($this->client->request('/Wl/User/Info/UserInfo.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_user_list' => $this->a_user_list,
            'k_business' => $this->k_business,
            'not_cached' => $this->not_cached,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
