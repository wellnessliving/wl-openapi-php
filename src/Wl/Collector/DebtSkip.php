<?php

namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Collector/DebtSkip.json
 */
class DebtSkip
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Collector/DebtSkip.json.
     *
     * @return DebtSkipPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DebtSkipPostRequest $request): DebtSkipPostResponse
    {
        return new DebtSkipPostResponse($this->client->request('/Wl/Collector/DebtSkip.json', $request->params(), 'POST'));
    }
}
