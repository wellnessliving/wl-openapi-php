<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Report/ReportQueryColumnMeta.json
 */
class ReportQueryColumnMeta
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Report/ReportQueryColumnMeta.json.
     *
     * @return ReportQueryColumnMetaGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryColumnMetaGetRequest $request): ReportQueryColumnMetaGetResponse
    {
        return new ReportQueryColumnMetaGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Report/ReportQueryColumnMeta.json', $request->params(), 'GET'));
    }
}
