<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relative list.
 */
class RelationGet
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
}
