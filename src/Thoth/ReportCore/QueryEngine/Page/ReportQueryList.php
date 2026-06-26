<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryList.json
 */
class ReportQueryList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Page/ReportQueryList.json.
     *
     * @return ReportQueryListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryListGetRequest $request): ReportQueryListGetResponse
    {
        return new ReportQueryListGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryList.json', $request->params(), 'GET'));
    }
}
