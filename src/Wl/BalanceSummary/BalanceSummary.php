<?php

namespace WlSdk\Wl\BalanceSummary;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/BalanceSummary/BalanceSummary.json
 */
class BalanceSummary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/BalanceSummary/BalanceSummary.json.
     *
     * @return BalanceSummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BalanceSummaryGetRequest $request): BalanceSummaryGetResponse
    {
        return new BalanceSummaryGetResponse($this->client->request('/Wl/BalanceSummary/BalanceSummary.json', $request->params(), 'GET'));
    }
}
