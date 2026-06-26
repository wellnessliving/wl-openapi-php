<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\AI;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/AI/ReportQueryAi.json
 */
class ReportQueryAi
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/AI/ReportQueryAi.json.
     *
     * @return ReportQueryAiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryAiPostRequest $request): ReportQueryAiPostResponse
    {
        return new ReportQueryAiPostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/AI/ReportQueryAi.json', $request->params(), 'POST'));
    }
}
