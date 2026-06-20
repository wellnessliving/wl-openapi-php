<?php

namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward actions.
 */
class ActionType
{
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
     * @return ActionTypeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ActionTypeGetRequest $request): ActionTypeGetResponse
    {
        return new ActionTypeGetResponse($this->client->request('/Wl/Reward/Action/ActionType.json', $request->params(), 'GET'));
    }
}
