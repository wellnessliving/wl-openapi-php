<?php
namespace WlSdk\Wl\Business\Reward\Config;

use WlSdk\WlSdkClient;

/**
 * Updates the reward program enabled or disabled state for the specified business.
 */
class RewardConfigPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the reward program enabled or disabled state for the specified business.
     *
     * Used in the backend settings editor when a staff member turns the reward program on or off. The
     * change is recorded in the reward audit log.
     *
     * @return RewardConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RewardConfigPostRequest $request): RewardConfigPostResponse
    {
        return new RewardConfigPostResponse($this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $request->params(), 'POST'));
    }
}
