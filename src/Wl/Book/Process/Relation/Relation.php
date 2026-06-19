<?php
namespace WlSdk\Wl\Book\Process\Relation;

use WlSdk\WlSdkClient;

/**
 * Checks if user can book specified session.
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
     * Checks if user can book specified session.
     *
     * Validates the date, business, class period, and user, verifies the session is not already booked, then
     * runs the full booking eligibility check (credit card, waiver, age, overlap, outstanding balance) and throws
     * a descriptive user-facing error if any requirement is not met.
     *
     * @return RelationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RelationGetRequest $request): RelationGetResponse
    {
        return new RelationGetResponse($this->client->request('/Wl/Book/Process/Relation/Relation.json', $request->params(), 'GET'));
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
