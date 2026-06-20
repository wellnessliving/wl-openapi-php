<?php

namespace WlSdk\Wl\Reward\Score;

use WlSdk\WlSdkClient;

/**
 * Returns the total reward points for the specified activity list or user.
 */
class Score
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the total reward points for the specified activity list or user.
     *
     * If `a_login_activity` is provided, returns the total points earned across those activities; otherwise
     * returns
     * the current point balance for the specified user in the given business.
     *
     * @return ScoreGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScoreGetRequest $request): ScoreGetResponse
    {
        return new ScoreGetResponse($this->client->request('/Wl/Reward/Score/Score.json', $request->params(), 'GET'));
    }

    /**
     * Gives user reward points for sharing of certain activity into Facebook.
     *
     * Validates the activity list, determines the appropriate reward score type per activity category, and
     * schedules
     * reward point additions for each shareable activity.
     *
     * @return ScorePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScorePostRequest $request): ScorePostResponse
    {
        return new ScorePostResponse($this->client->request('/Wl/Reward/Score/Score.json', $request->params(), 'POST'));
    }

    /**
     * Manually adjusts the reward points balance for the specified user.
     *
     * Requires the reward point reset privilege, creates a manual activity log entry, and applies the signed point
     * adjustment to the user's reward balance within a transaction.
     *
     * @return ScorePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ScorePutRequest $request): ScorePutResponse
    {
        return new ScorePutResponse($this->client->request('/Wl/Reward/Score/Score.json', $request->params(), 'PUT'));
    }
}
