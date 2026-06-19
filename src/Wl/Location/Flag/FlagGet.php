<?php
namespace WlSdk\Wl\Location\Flag;

use WlSdk\WlSdkClient;

/**
 * Checks if user `uid` is flagged in location `k_location` or
 * each of users `a_uid` is flagged in location `k_location`.
 */
class FlagGet
{
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
     * @return FlagGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FlagGetRequest $request): FlagGetResponse
    {
        return new FlagGetResponse($this->client->request('/Wl/Location/Flag/Flag.json', $request->params(), 'GET'));
    }
}
