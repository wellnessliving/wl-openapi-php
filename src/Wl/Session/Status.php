<?php

namespace WlSdk\Wl\Session;

use WlSdk\WlSdkClient;

/**
 * Returns current user business and mode.
 */
class Status
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns current user business and mode.
     *
     * @return StatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatusGetRequest $request): StatusGetResponse
    {
        return new StatusGetResponse($this->client->request('/Wl/Session/Status.json', $request->params(), 'GET'));
    }
}
