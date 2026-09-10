<?php

namespace WlSdk\Wl\Business\AuthorizeSupport\Request;

use WlSdk\WlSdkClient;

/**
 * Requests authorization of support employee to business location.
 * Makes authorization if it is possible without special permission.
 */
class Request
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Requests authorization of support employee to business location.
Makes authorization if it is possible without special permission.
     *
     * If the support employee already has access to the franchisor business, or the franchisor
     *  business has open access enabled, authorization is granted immediately and the existing
     *  access window is extended by one day. Otherwise, a request is created and every staff
     *  member with the Manage Business permission on the franchisor business is notified in real
     *  time; the caller receives `is_pending` as `true` until a staff member approves or rejects
     *  the request.
     *
     * @return RequestGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RequestGetRequest $request): RequestGetResponse
    {
        return new RequestGetResponse($this->client->request('/Wl/Business/AuthorizeSupport/Request/Request.json', $request->params(), 'GET'));
    }

    /**
     * Cancels request of access to location.
     *
     * Withdraws a support agent's pending request for temporary access to a business location.
     *  Notifies the staff member who would have responded to the request in real time and closes
     *  out the underlying access request.
     *
     * @return RequestDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RequestDeleteRequest $request): RequestDeleteResponse
    {
        return new RequestDeleteResponse($this->client->request('/Wl/Business/AuthorizeSupport/Request/Request.json', $request->params(), 'DELETE'));
    }
}
