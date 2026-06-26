<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Page/ReportQueryActivate.json
 */
class ReportQueryActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/Page/ReportQueryActivate.json.
     *
     * @return ReportQueryActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryActivatePostRequest $request): ReportQueryActivatePostResponse
    {
        return new ReportQueryActivatePostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Page/ReportQueryActivate.json', $request->params(), 'POST'));
    }
}
