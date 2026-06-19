<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available reward actions.
 */
class ActionApi
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of reward action category.
     *
     * @var string|null
     */
    public ?string $k_reward_action_category = null;

    /**
     * Key of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of available reward actions.
     *
     * Returns all reward actions visible to the specified user in the given business, optionally filtered by
     * category,
     * including the score value and request status for each action.
     *
     * @return ActionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ActionApiGetResponse
    {
        return new ActionApiGetResponse($this->client->request('/Wl/Reward/Action/Action.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_action_category' => $this->k_reward_action_category,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
