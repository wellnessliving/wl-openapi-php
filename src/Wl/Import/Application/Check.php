<?php

namespace WlSdk\Wl\Import\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Import/Application/Check.json
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
     * Calls POST /Wl/Import/Application/Check.json.
     *
     * @return CheckPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CheckPostRequest $request): CheckPostResponse
    {
        return new CheckPostResponse($this->client->request('/Wl/Import/Application/Check.json', $request->params(), 'POST'));
    }
}
