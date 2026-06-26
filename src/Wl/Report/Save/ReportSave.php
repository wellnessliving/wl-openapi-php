<?php

namespace WlSdk\Wl\Report\Save;

use WlSdk\WlSdkClient;

/**
 * Returns information about saved report.
 */
class ReportSave
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about saved report.
     *
     * @return ReportSaveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportSaveGetRequest $request): ReportSaveGetResponse
    {
        return new ReportSaveGetResponse($this->client->request('/Wl/Report/Save/ReportSave.json', $request->params(), 'GET'));
    }

    /**
     * Saves new saved report.
     *
     * @return ReportSavePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportSavePostRequest $request): ReportSavePostResponse
    {
        return new ReportSavePostResponse($this->client->request('/Wl/Report/Save/ReportSave.json', $request->params(), 'POST'));
    }

    /**
     * Updates existing saved report.
     *
     * @return ReportSavePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ReportSavePutRequest $request): ReportSavePutResponse
    {
        return new ReportSavePutResponse($this->client->request('/Wl/Report/Save/ReportSave.json', $request->params(), 'PUT'));
    }
}
