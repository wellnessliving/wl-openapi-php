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
     * Validates the business and the requested users, then loads rank category and rank information for
     * each user, including the currently held rank and the ranks available for promotion in each category.
     * Users can be requested either as a plain list of user keys or as a list of user and rank category pairs.
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
     * Validates the business, the specified users, and the requested ranks, then compares them against each
     * user's current rank in each category. For every rank that changed, updates the previous rank's promotion
     * condition data, marks it as no longer current, inserts the new current rank, and propagates the
     * promotion to related franchisee businesses when applicable. Finally, logs the promotions for the client
     * belt history report.
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
