<?php

namespace WlSdk\Wl\Login\Rank;

use WlSdk\WlSdkClient;

/**
 * Returns list of ranks for specified users or login ranks.
 */
class LoginRankList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of ranks for specified users or login ranks.
     *
     * @return LoginRankListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginRankListGetRequest $request): LoginRankListGetResponse
    {
        return new LoginRankListGetResponse($this->client->request('/Wl/Login/Rank/LoginRankList.json', $request->params(), 'GET'));
    }

    /**
     * Saves ranks for specified users in the business.
     *
     * @return LoginRankListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginRankListPostRequest $request): LoginRankListPostResponse
    {
        return new LoginRankListPostResponse($this->client->request('/Wl/Login/Rank/LoginRankList.json', $request->params(), 'POST'));
    }
}
