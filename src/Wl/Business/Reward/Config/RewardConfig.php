<?php

namespace WlSdk\Wl\Business\Reward\Config;

use WlSdk\WlSdkClient;

/**
 * Returns the reward program configuration for the specified business.
 */
class RewardConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the reward program configuration for the specified business.
     *
     * Used in the backend settings editor to show the current enabled or disabled state of the reward
     * program before the staff member makes a change. Always reads live data, bypassing the cache.
     *
     * @return RewardConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RewardConfigGetRequest $request): RewardConfigGetResponse
    {
        return new RewardConfigGetResponse($this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $request->params(), 'GET'));
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
