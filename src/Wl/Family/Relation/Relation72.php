<?php

namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relative list.
 */
class Relation72
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
     * @return Relation72GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Relation72GetRequest $request): Relation72GetResponse
    {
        return new Relation72GetResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $request->params(), 'GET'));
    }

    /**
     * Adds to user [RelationApi](/Wl/Family/Relation/Relation.json)
relative [RelationApi](/Wl/Family/Relation/Relation.json).
     *
     * Creates a bidirectional family relationship between the user identified by `uid` and the user specified in
     * `a_new`, then returns the updated list of relationships for `uid`.
     *
     * @return Relation72PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(Relation72PostRequest $request): Relation72PostResponse
    {
        return new Relation72PostResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $request->params(), 'POST'));
    }

    /**
     * Deletes family relation between 2 users.
     *
     * Removes the relationship between the user identified by `uid` and the user identified by `uid_delete`
     * within the given business, then returns the updated list of relationships for `uid`.
     *
     * @return Relation72DeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(Relation72DeleteRequest $request): Relation72DeleteResponse
    {
        return new Relation72DeleteResponse($this->client->request('/Wl/Family/Relation/Relation72.json', $request->params(), 'DELETE'));
    }
}
