<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relative list.
 */
class Relation72Get
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
}
