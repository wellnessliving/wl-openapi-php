<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Deletes family relation between 2 users.
 */
class Relation72Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
