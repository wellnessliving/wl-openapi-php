<?php

namespace WlSdk\Wl\Location\Flag;

use WlSdk\WlSdkClient;

/**
 * Checks if user [FlagApi::$uid](/Wl/Location/Flag/Flag.json) is flagged in location
 * [FlagApi::$k_location](/Wl/Location/Flag/Flag.json) or
 * each of users [FlagApi::$a_uid](/Wl/Location/Flag/Flag.json) is flagged in location
 * [FlagApi::$k_location](/Wl/Location/Flag/Flag.json).
 */
class Flag
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if user [FlagApi::$uid](/Wl/Location/Flag/Flag.json) is flagged in location [FlagApi::$k_location](/Wl/Location/Flag/Flag.json) or
each of users [FlagApi::$a_uid](/Wl/Location/Flag/Flag.json) is flagged in location [FlagApi::$k_location](/Wl/Location/Flag/Flag.json).
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
