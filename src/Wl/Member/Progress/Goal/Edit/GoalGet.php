<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress goal log data.
 */
class GoalGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress goal log data.
     *
     * Loads the current goal values for all configured progress fields for the specified user and business,
     * and also returns whether the current viewer is a staff member.
     *
     * @return GoalGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GoalGetRequest $request): GoalGetResponse
    {
        return new GoalGetResponse($this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $request->params(), 'GET'));
    }
}
