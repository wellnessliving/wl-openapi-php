<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryInsert.json
 */
class ReportQueryInsert
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/Page/ReportQueryInsert.json.
     *
     * @return ReportQueryInsertPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryInsertPostRequest $request): ReportQueryInsertPostResponse
    {
        return new ReportQueryInsertPostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryInsert.json', $request->params(), 'POST'));
    }
}
