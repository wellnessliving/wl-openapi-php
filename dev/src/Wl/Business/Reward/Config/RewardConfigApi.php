<?php
namespace WlSdk\Wl\Business\Reward\Config;

use WlSdk\WlSdkClient;

/**
 * Returns the reward program configuration for the specified business.
 */
class RewardConfigApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` Reward program is disabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_disabled_reward_program = null;

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
     * @return RewardConfigApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RewardConfigApiGetResponse
    {
        return new RewardConfigApiGetResponse($this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $this->params(), 'GET'));
    }

    /**
     * Updates the reward program enabled or disabled state for the specified business.
     *
     * Used in the backend settings editor when a staff member turns the reward program on or off. The
     * change is recorded in the reward audit log.
     *
     * @return RewardConfigApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): RewardConfigApiPostResponse
    {
        return new RewardConfigApiPostResponse($this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_disabled_reward_program' => $this->is_disabled_reward_program,
            ],
            static fn($v) => $v !== null
        );
    }
}
