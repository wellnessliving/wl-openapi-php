<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryGet.json
 */
class ReportQueryGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Page/ReportQueryGet.json.
     *
     * @return ReportQueryGetGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryGetGetRequest $request): ReportQueryGetGetResponse
    {
        return new ReportQueryGetGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryGet.json', $request->params(), 'GET'));
    }
}
