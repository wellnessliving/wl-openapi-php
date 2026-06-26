<?php

namespace WlSdk\Core\Request;

use WlSdk\WlSdkClient;

/**
 * Forwards this API request to all datacenters.
 */
class RequestForward
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Forwards this API request to all datacenters.
     *
     * @return RequestForwardGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RequestForwardGetRequest $request): RequestForwardGetResponse
    {
        return new RequestForwardGetResponse($this->client->request('/Core/Request/RequestForward.json', $request->params(), 'GET'));
    }
}
