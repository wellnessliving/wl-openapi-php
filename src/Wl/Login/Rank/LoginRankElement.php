<?php

namespace WlSdk\Wl\Login\Rank;

use WlSdk\WlSdkClient;

/**
 * Deletes a rank record for a user.
 */
class LoginRankElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes a rank record for a user.
     *
     * @return LoginRankElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LoginRankElementDeleteRequest $request): LoginRankElementDeleteResponse
    {
        return new LoginRankElementDeleteResponse($this->client->request('/Wl/Login/Rank/LoginRankElement.json', $request->params(), 'DELETE'));
    }
}
