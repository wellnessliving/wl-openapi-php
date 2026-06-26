<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryTotal.json
 */
class ReportQueryTotal
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Page/ReportQueryTotal.json.
     *
     * @return ReportQueryTotalGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryTotalGetRequest $request): ReportQueryTotalGetResponse
    {
        return new ReportQueryTotalGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryTotal.json', $request->params(), 'GET'));
    }
}
