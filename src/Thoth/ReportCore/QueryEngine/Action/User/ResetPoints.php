<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Action\User;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Action/User/ResetPoints.json
 */
class ResetPoints
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/Action/User/ResetPoints.json.
     *
     * @return ResetPointsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResetPointsPostRequest $request): ResetPointsPostResponse
    {
        return new ResetPointsPostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Action/User/ResetPoints.json', $request->params(), 'POST'));
    }
}
