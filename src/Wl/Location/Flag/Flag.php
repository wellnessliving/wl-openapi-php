<?php

namespace WlSdk\Wl\Location\Flag;

use WlSdk\WlSdkClient;

/**
 * Checks if user {@link \WlSdk\Wl\Location\Flag\Flag} is flagged in location {@link \WlSdk\Wl\Location\Flag\Flag} or
 * each of users {@link \WlSdk\Wl\Location\Flag\Flag} is flagged in location {@link \WlSdk\Wl\Location\Flag\Flag}.
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
     * Checks if user {@link \WlSdk\Wl\Location\Flag\Flag} is flagged in location {@link \WlSdk\Wl\Location\Flag\Flag} or
each of users {@link \WlSdk\Wl\Location\Flag\Flag} is flagged in location {@link \WlSdk\Wl\Location\Flag\Flag}.
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
