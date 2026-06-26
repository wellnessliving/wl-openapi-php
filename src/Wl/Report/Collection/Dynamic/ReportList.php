<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

use WlSdk\WlSdkClient;

/**
 * Gets list of reports available for placing in a dynamic collection of specified class.
 */
class ReportList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of reports available for placing in a dynamic collection of specified class.
     *
     * @return ReportListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportListGetRequest $request): ReportListGetResponse
    {
        return new ReportListGetResponse($this->client->request('/Wl/Report/Collection/Dynamic/ReportList.json', $request->params(), 'GET'));
    }
}
