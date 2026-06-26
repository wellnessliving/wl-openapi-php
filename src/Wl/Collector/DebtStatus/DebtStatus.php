<?php

namespace WlSdk\Wl\Collector\DebtStatus;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Collector/DebtStatus/DebtStatus.json
 */
class DebtStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Collector/DebtStatus/DebtStatus.json.
     *
     * @return DebtStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DebtStatusGetRequest $request): DebtStatusGetResponse
    {
        return new DebtStatusGetResponse($this->client->request('/Wl/Collector/DebtStatus/DebtStatus.json', $request->params(), 'GET'));
    }
}
