<?php

namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Returns member information and notification items for the Self Check-In Web App.
 */
class MemberInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns member information and notification items for the Self Check-In Web App.
     *
     * Returns the user's profile data along with any notification items (such as expiring memberships, required
     * waivers,
     * or outstanding balances) that should be displayed during the self check-in flow.
     *
     * @return MemberInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MemberInfoGetRequest $request): MemberInfoGetResponse
    {
        return new MemberInfoGetResponse($this->client->request('/Wl/Reception/Application/MemberInfo.json', $request->params(), 'GET'));
    }
}
