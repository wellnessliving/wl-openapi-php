<?php

namespace WlSdk\Thoth\ReportCore\Generator;

use WlSdk\WlSdkClient;

/**
 * Returns information about filters.
 */
class FilterInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about filters.
     *
     * @return FilterInfoPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FilterInfoPostRequest $request): FilterInfoPostResponse
    {
        return new FilterInfoPostResponse($this->client->request('/Thoth/ReportCore/Generator/FilterInfo.json', $request->params(), 'POST'));
    }
}
