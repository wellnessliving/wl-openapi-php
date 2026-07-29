<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json
 */
class ReportQueryCustomizationForm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json.
     *
     * @return ReportQueryCustomizationFormGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryCustomizationFormGetRequest $request): ReportQueryCustomizationFormGetResponse
    {
        return new ReportQueryCustomizationFormGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json.
     *
     * @return ReportQueryCustomizationFormPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryCustomizationFormPostRequest $request): ReportQueryCustomizationFormPostResponse
    {
        return new ReportQueryCustomizationFormPostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json', $request->params(), 'POST'));
    }
}
