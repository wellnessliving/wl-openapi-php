<?php

namespace WlSdk\Wl\Visit\Blame;

use WlSdk\WlSdkClient;

/**
 * Gets visit status.
 */
class Check
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
     * @return CheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CheckGetRequest $request): CheckGetResponse
    {
        return new CheckGetResponse($this->client->request('/Wl/Visit/Blame/Check.json', $request->params(), 'GET'));
    }
}
