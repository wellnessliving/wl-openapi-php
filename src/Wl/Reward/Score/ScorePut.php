<?php
namespace WlSdk\Wl\Reward\Score;

use WlSdk\WlSdkClient;

/**
 * Manually adjusts the reward points balance for the specified user.
 */
class ScorePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
