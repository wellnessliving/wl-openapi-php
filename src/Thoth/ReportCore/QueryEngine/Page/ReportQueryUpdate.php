<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryUpdate.json
 */
class ReportQueryUpdate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/Page/ReportQueryUpdate.json.
     *
     * @return ReportQueryUpdatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryUpdatePostRequest $request): ReportQueryUpdatePostResponse
    {
        return new ReportQueryUpdatePostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryUpdate.json', $request->params(), 'POST'));
    }
}
