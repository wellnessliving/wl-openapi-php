<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward actions.
 */
class ActionTypeApi
{
    /**
     * ID of type of reward action. One of [RsRewardScoreSid](#/components/schemas/RsRewardScoreSid) constants.
     *
     * @var int|null
     */
    public ?int $id_reward_score = null;

    /**
     * Key of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about reward actions.
     *
     * Returns all reward action records of the specified score type for the business, including the point value
     * configured for each action.
     *
     * @return ActionTypeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ActionTypeApiGetResponse
    {
        return new ActionTypeApiGetResponse($this->client->request('/Wl/Reward/Action/ActionType.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_reward_score' => $this->id_reward_score,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
