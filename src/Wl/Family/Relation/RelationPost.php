<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Adds to user `uid`
 * relative `a_new`.
 */
class RelationPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
