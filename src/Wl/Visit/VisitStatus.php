<?php
namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Gets visit status.
 */
class VisitStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets visit status.
     *
     * Returns full details for the specified visit, including date, duration, staff, location,
     * virtual service join URL, assigned resources, downloadable calendar data, and whether
     * the visit can still be cancelled. Handles class, appointment, and gym visit types. Used
     * to render the visit detail view and action buttons in the client portal.
     *
     * @return VisitStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VisitStatusGetRequest $request): VisitStatusGetResponse
    {
        return new VisitStatusGetResponse($this->client->request('/Wl/Visit/VisitStatus.json', $request->params(), 'GET'));
    }

    /**
     * Changes visit status.
     *
     * Applies a status transition to the specified visit (for example, check-in, no-show, or
     * cancellation). Supports optimistic concurrency via an expected-from status, optional
     * late-cancel fee charging, and client notification flags. Requires backend access or
     * appropriate staff privileges.
     *
     * @return VisitStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VisitStatusPostRequest $request): VisitStatusPostResponse
    {
        return new VisitStatusPostResponse($this->client->request('/Wl/Visit/VisitStatus.json', $request->params(), 'POST'));
    }
}
