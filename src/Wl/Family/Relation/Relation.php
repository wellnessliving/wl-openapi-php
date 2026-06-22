<?php

namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relative list.
 */
class Relation
{
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
     * @return RelationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RelationGetRequest $request): RelationGetResponse
    {
        return new RelationGetResponse($this->client->request('/Wl/Family/Relation/Relation.json', $request->params(), 'GET'));
    }

    /**
     * Adds to user `uid`
relative `a_new`.
     *
     * Creates a bidirectional family relationship between the user identified by `uid` and the user specified in
     * `a_new`, then returns the updated list of relationships for `uid`.
     *
     * @return RelationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RelationPostRequest $request): RelationPostResponse
    {
        return new RelationPostResponse($this->client->request('/Wl/Family/Relation/Relation.json', $request->params(), 'POST'));
    }

    /**
     * Deletes family relation between 2 users.
     *
     * Removes the relationship between the user identified by `uid` and the user identified by `uid_delete`
     * within the given business, then returns the updated list of relationships for `uid`.
     *
     * @return RelationDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RelationDeleteRequest $request): RelationDeleteResponse
    {
        return new RelationDeleteResponse($this->client->request('/Wl/Family/Relation/Relation.json', $request->params(), 'DELETE'));
    }
}
