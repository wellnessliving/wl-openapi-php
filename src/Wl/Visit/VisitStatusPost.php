<?php
namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Changes visit status.
 */
class VisitStatusPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
