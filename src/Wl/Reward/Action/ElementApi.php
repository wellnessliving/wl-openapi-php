<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward action item.
 */
class ElementApi
{
    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward action to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

    /**
     * User to retrieve information about.
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
     * Retrieves information about reward action item.
     *
     * Returns the point value, score type, description, and whether the user has already submitted a points
     * request
     * for the specified reward action.
     *
     * @return ElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ElementApiGetResponse
    {
        return new ElementApiGetResponse($this->client->request('/Wl/Reward/Action/Element.json', $this->params(), 'GET'));
    }

    /**
     * Requests points earning.
     *
     * Submits a custom reward points request for the specified action on behalf of the given user and records
     * the pending approval request.
     *
     * @return ElementApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ElementApiPostResponse
    {
        return new ElementApiPostResponse($this->client->request('/Wl/Reward/Action/Element.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_action' => $this->k_reward_action,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
