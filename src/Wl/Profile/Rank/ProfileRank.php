<?php

namespace WlSdk\Wl\Profile\Rank;

use WlSdk\WlSdkClient;

/**
 * Gets promotion date on belts.
 */
class ProfileRank
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets promotion date on belts.
     *
     * @return ProfileRankGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProfileRankGetRequest $request): ProfileRankGetResponse
    {
        return new ProfileRankGetResponse($this->client->request('/Wl/Profile/Rank/ProfileRank.json', $request->params(), 'GET'));
    }

    /**
     * Sets promotion date on belts.
     *
     * @return ProfileRankPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfileRankPostRequest $request): ProfileRankPostResponse
    {
        return new ProfileRankPostResponse($this->client->request('/Wl/Profile/Rank/ProfileRank.json', $request->params(), 'POST'));
    }
}
