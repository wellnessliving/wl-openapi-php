<?php
namespace WlSdk\Wl\Reward\Score\Current;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about current score in wellnessliving points.
 */
class Current
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about current score in wellnessliving points.
     *
     * Returns the user's current reward point balance, their rank in the first available leaderboard, and the
     * leaderboard title for the specified business.
     *
     * @return CurrentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CurrentGetRequest $request): CurrentGetResponse
    {
        return new CurrentGetResponse($this->client->request('/Wl/Reward/Score/Current/Current.json', $request->params(), 'GET'));
    }
}
