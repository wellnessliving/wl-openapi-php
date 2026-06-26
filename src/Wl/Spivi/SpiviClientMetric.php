<?php

namespace WlSdk\Wl\Spivi;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Spivi/SpiviClientMetric.json
 */
class SpiviClientMetric
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Spivi/SpiviClientMetric.json.
     *
     * @return SpiviClientMetricGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SpiviClientMetricGetRequest $request): SpiviClientMetricGetResponse
    {
        return new SpiviClientMetricGetResponse($this->client->request('/Wl/Spivi/SpiviClientMetric.json', $request->params(), 'GET'));
    }
}
