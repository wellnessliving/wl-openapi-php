<?php

namespace WlSdk\Thoth\ProgressLog\Report;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ProgressLog/Report/ProgressLogReportInfo.json
 */
class ProgressLogReportInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ProgressLog/Report/ProgressLogReportInfo.json.
     *
     * @return ProgressLogReportInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProgressLogReportInfoGetRequest $request): ProgressLogReportInfoGetResponse
    {
        return new ProgressLogReportInfoGetResponse($this->client->request('/Thoth/ProgressLog/Report/ProgressLogReportInfo.json', $request->params(), 'GET'));
    }
}
