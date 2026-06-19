<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relative list.
 */
class Relation72Api
{
    /**
     * ID of the user behavior flow.
     * One of [FlowSid](#/components/schemas/Wl.User.Tracking.FlowSid) constants.
     *
     * @var int|null
     */
    public ?int $id_flow = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose relationships are being assessed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_new = null;

    /**
     * ID of source mode.
     * One of [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The key of the related user who [RelationApi](/Wl/Family/Relation/Relation.json) must be removed.
     *
     * @var string|null
     */
    public ?string $uid_delete = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets relative list.
     *
     * Returns the list of all family relationships for the specified user within the given business, including
     * relationship type, reverse relationship type, name, and photo information for each related user.
     *
     * @return Relation72ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): Relation72ApiGetResponse
    {
        return new Relation72ApiGetResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $this->params(), 'GET'));
    }

    /**
     * Adds to user [RelationApi](/Wl/Family/Relation/Relation.json)
relative [RelationApi](/Wl/Family/Relation/Relation.json).
     *
     * Creates a bidirectional family relationship between the user identified by `uid` and the user specified in
     * `a_new`, then returns the updated list of relationships for `uid`.
     *
     * @return Relation72ApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): Relation72ApiPostResponse
    {
        return new Relation72ApiPostResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $this->params(), 'POST'));
    }

    /**
     * Deletes family relation between 2 users.
     *
     * Removes the relationship between the user identified by `uid` and the user identified by `uid_delete`
     * within the given business, then returns the updated list of relationships for `uid`.
     *
     * @return Relation72ApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): Relation72ApiDeleteResponse
    {
        return new Relation72ApiDeleteResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_flow' => $this->id_flow,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_new' => $this->a_new,
            'id_mode' => $this->id_mode,
            'uid_delete' => $this->uid_delete,
            ],
            static fn($v) => $v !== null
        );
    }
}
