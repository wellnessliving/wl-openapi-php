<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves progress goal fields log.
 */
class GoalPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves progress goal fields log.
     *
     * Validates and persists the goal values provided in `$a_field_goal` for the specified user and business,
     * then returns the updated field list in `$a_field_list`.
     *
     * @return GoalPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GoalPostRequest $request): GoalPostResponse
    {
        return new GoalPostResponse($this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $request->params(), 'POST'));
    }
}
