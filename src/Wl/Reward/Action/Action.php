<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available reward actions.
 */
class Action
{
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
     * @return ActionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ActionGetRequest $request): ActionGetResponse
    {
        return new ActionGetResponse($this->client->request('/Wl/Reward/Action/Action.json', $request->params(), 'GET'));
    }
}
