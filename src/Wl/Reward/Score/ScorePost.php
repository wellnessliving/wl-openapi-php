<?php
namespace WlSdk\Wl\Reward\Score;

use WlSdk\WlSdkClient;

/**
 * Gives user reward points for sharing of certain activity into Facebook.
 */
class ScorePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
