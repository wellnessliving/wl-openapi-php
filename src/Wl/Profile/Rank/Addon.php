<?php

namespace WlSdk\Wl\Profile\Rank;

use WlSdk\WlSdkClient;

/**
 * Gets full list of ranks owned by the client.
 */
class Addon
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets full list of ranks owned by the client.
     *
     * @return AddonGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddonGetRequest $request): AddonGetResponse
    {
        return new AddonGetResponse($this->client->request('/Wl/Profile/Rank/Addon.json', $request->params(), 'GET'));
    }

    /**
     * Sets addon ranks in Belt.
     *
     * @return AddonPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddonPostRequest $request): AddonPostResponse
    {
        return new AddonPostResponse($this->client->request('/Wl/Profile/Rank/Addon.json', $request->params(), 'POST'));
    }
}
