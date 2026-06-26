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
     * @return RequestDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RequestDeleteRequest $request): RequestDeleteResponse
    {
        return new RequestDeleteResponse($this->client->request('/Wl/Business/AuthorizeSupport/Request/Request.json', $request->params(), 'DELETE'));
    }
}
