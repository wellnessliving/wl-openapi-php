<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Adds to user [RelationApi](/Wl/Family/Relation/Relation.json)
 * relative [RelationApi](/Wl/Family/Relation/Relation.json).
 */
class Relation72Post
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
