<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress goal log data.
 */
class GoalApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of fields.
     * 
     * Keys are field IDs ([ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid)
     * constants).
     * Values are new field values.
     * Structure of value completely defined by individual fields.
     *
     * @var int[]|null
     */
    public ?array $a_field_goal = null;

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
     * @return GoalApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): GoalApiGetResponse
    {
        return new GoalApiGetResponse($this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $this->params(), 'GET'));
    }

    /**
     * Saves progress goal fields log.
     *
     * Validates and persists the goal values provided in `$a_field_goal` for the specified user and business,
     * then returns the updated field list in `$a_field_list`.
     *
     * @return GoalApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): GoalApiPostResponse
    {
        return new GoalApiPostResponse($this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_goal' => $this->a_field_goal,
            ],
            static fn($v) => $v !== null
        );
    }
}
