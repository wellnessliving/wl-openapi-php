<?php
namespace WlSdk\Wl\Book\Process\Relation;

use WlSdk\WlSdkClient;

/**
 * Checks if user can book specified session.
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
}
