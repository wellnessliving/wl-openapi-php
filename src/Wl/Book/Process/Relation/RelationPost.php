<?php
namespace WlSdk\Wl\Book\Process\Relation;

use WlSdk\WlSdkClient;

/**
 * Added new relative.
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
     * Added new relative.
     *
     * Creates a new family member profile for the specified business and links it as a relative of `uid_from`,
     * applying birthday validation, email-inheritance rules, and payment responsibility settings. Returns the UID
     * of the newly created user in `uid_create`.
     *
     * @return RelationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RelationPostRequest $request): RelationPostResponse
    {
        return new RelationPostResponse($this->client->request('/Wl/Book/Process/Relation/Relation.json', $request->params(), 'POST'));
    }
}
