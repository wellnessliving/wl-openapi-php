<?php

namespace WlSdk\Wl\Report\Background;

use WlSdk\WlSdkClient;

/**
 * Gets status of the report accumulation.
 */
class GenerateReport
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets status of the report accumulation.
     *
     * @return GenerateReportGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GenerateReportGetRequest $request): GenerateReportGetResponse
    {
        return new GenerateReportGetResponse($this->client->request('/Wl/Report/Background/GenerateReport.json', $request->params(), 'GET'));
    }

    /**
     * Marks the report as needed for display in Generated reports.
     *
     * @return GenerateReportPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GenerateReportPostRequest $request): GenerateReportPostResponse
    {
        return new GenerateReportPostResponse($this->client->request('/Wl/Report/Background/GenerateReport.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Report/Background/GenerateReport.json.
     *
     * @return GenerateReportPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(GenerateReportPutRequest $request): GenerateReportPutResponse
    {
        return new GenerateReportPutResponse($this->client->request('/Wl/Report/Background/GenerateReport.json', $request->params(), 'PUT'));
    }

    /**
     * Calls DELETE /Wl/Report/Background/GenerateReport.json.
     *
     * @return GenerateReportDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(GenerateReportDeleteRequest $request): GenerateReportDeleteResponse
    {
        return new GenerateReportDeleteResponse($this->client->request('/Wl/Report/Background/GenerateReport.json', $request->params(), 'DELETE'));
    }
}
