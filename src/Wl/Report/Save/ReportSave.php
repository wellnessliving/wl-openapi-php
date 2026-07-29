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
     * Loads the title, description, category and stored filters of the saved report identified by
     * {@link \WlSdk\Wl\Report\Save\ReportSave} within the current business.
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
     * Creates a new saved report for the current business from the specified title, description, category,
     * filters and view widget settings, and stores the related customization for the report controller.
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
     * Rewrites the title, description, category, filters and view widget settings of the saved report
     * identified by {@link \WlSdk\Wl\Report\Save\ReportSave} within the current business.
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
