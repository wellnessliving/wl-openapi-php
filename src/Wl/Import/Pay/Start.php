<?php

namespace WlSdk\Wl\Import\Pay;

use WlSdk\WlSdkClient;

/**
 * Starts an import.
 */
class Start
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Starts an import.
     *
     * @return StartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StartPostRequest $request): StartPostResponse
    {
        return new StartPostResponse($this->client->request('/Wl/Import/Pay/Start.json', $request->params(), 'POST'));
    }
}
