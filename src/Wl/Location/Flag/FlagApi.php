<?php
namespace WlSdk\Wl\Location\Flag;

use WlSdk\WlSdkClient;

/**
 * Checks if user `uid` is flagged in location `k_location` or
 * each of users `a_uid` is flagged in location `k_location`.
 */
class FlagApi
{
    /**
     * User keys.
     * `null` if not set.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key.
     * `null` if not set.
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
     * Checks if user `uid` is flagged in location `k_location` or
each of users `a_uid` is flagged in location `k_location`.
     *
     * Accepts either a single user key (`uid`) or an array of user keys (`a_uid`) and returns the flag status
     * for each, including whether the flagged user is restricted from booking or purchasing at the location.
     *
     * @return FlagApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): FlagApiGetResponse
    {
        return new FlagApiGetResponse($this->client->request('/Wl/Location/Flag/Flag.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
