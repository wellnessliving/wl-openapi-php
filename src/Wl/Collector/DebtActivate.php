<?php

namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Collector/DebtActivate.json
 */
class DebtActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Collector/DebtActivate.json.
     *
     * @return DebtActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DebtActivatePostRequest $request): DebtActivatePostResponse
    {
        return new DebtActivatePostResponse($this->client->request('/Wl/Collector/DebtActivate.json', $request->params(), 'POST'));
    }
}
