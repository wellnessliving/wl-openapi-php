<?php

namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/Response/ReportPostpone.json
 */
class ReportPostpone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Quiz/Response/ReportPostpone.json.
     *
     * @return ReportPostponeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportPostponeGetRequest $request): ReportPostponeGetResponse
    {
        return new ReportPostponeGetResponse($this->client->request('/Wl/Quiz/Response/ReportPostpone.json', $request->params(), 'GET'));
    }
}
