<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQuerySchema.json
 */
class ReportQuerySchema
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Page/ReportQuerySchema.json.
     *
     * @return ReportQuerySchemaGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQuerySchemaGetRequest $request): ReportQuerySchemaGetResponse
    {
        return new ReportQuerySchemaGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQuerySchema.json', $request->params(), 'GET'));
    }
}
