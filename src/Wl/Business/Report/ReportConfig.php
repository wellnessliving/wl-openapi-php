<?php

namespace WlSdk\Wl\Business\Report;

use WlSdk\WlSdkClient;

/**
 * Returns the specified report configuration for the specified user within the specified business.
 */
class ReportConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the specified report configuration for the specified user within the specified business.
     *
     * @return ReportConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportConfigGetRequest $request): ReportConfigGetResponse
    {
        return new ReportConfigGetResponse($this->client->request('/Wl/Business/Report/ReportConfig.json', $request->params(), 'GET'));
    }

    /**
     * Saves report configuration for specified user within specified business.
     *
     * @return ReportConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportConfigPostRequest $request): ReportConfigPostResponse
    {
        return new ReportConfigPostResponse($this->client->request('/Wl/Business/Report/ReportConfig.json', $request->params(), 'POST'));
    }
}
