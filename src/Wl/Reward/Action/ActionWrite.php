<?php

namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Updates configuration fields for the specified reward action.
 */
class ActionWrite
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates configuration fields for the specified reward action.
     *
     * Accepts changes to fields such as auto-renewal flag, point cap, point value, and linked promotions, and
     * persists only the provided fields while logging the changes.
     *
     * @return ActionWritePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ActionWritePostRequest $request): ActionWritePostResponse
    {
        return new ActionWritePostResponse($this->client->request('/Wl/Reward/Action/ActionWrite.json', $request->params(), 'POST'));
    }
}
