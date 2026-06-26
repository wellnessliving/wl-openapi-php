<?php

namespace WlSdk\Wl\Staff\IpRestriction;

use WlSdk\WlSdkClient;

/**
 * Determines if the logged-in user's IP is allowed by the passed list of IP restrictions.
 */
class IpRestriction
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Determines if the logged-in user's IP is allowed by the passed list of IP restrictions.
     *
     * @return IpRestrictionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(IpRestrictionGetRequest $request): IpRestrictionGetResponse
    {
        return new IpRestrictionGetResponse($this->client->request('/Wl/Staff/IpRestriction/IpRestriction.json', $request->params(), 'GET'));
    }
}
