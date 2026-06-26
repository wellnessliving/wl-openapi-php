<?php

namespace WlSdk\Thoth\ReportCore\Generator;

use WlSdk\WlSdkClient;

/**
 * Gets last configuration of the report filter.
 */
class Filter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets last configuration of the report filter.
     *
     * @return FilterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FilterGetRequest $request): FilterGetResponse
    {
        return new FilterGetResponse($this->client->request('/Thoth/ReportCore/Generator/Filter.json', $request->params(), 'GET'));
    }

    /**
     * Saves last configuration of the report filter.
     *
     * @return FilterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FilterPostRequest $request): FilterPostResponse
    {
        return new FilterPostResponse($this->client->request('/Thoth/ReportCore/Generator/Filter.json', $request->params(), 'POST'));
    }
}
