<?php

namespace WlSdk\Wl\Log;

use WlSdk\WlSdkClient;

/**
 * Retrieves log data in html format.
 */
class LogBusinessData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves log data in html format.
     *
     * @return LogBusinessDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LogBusinessDataGetRequest $request): LogBusinessDataGetResponse
    {
        return new LogBusinessDataGetResponse($this->client->request('/Wl/Log/LogBusinessData.json', $request->params(), 'GET'));
    }
}
