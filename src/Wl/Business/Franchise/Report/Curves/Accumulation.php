<?php

namespace WlSdk\Wl\Business\Franchise\Report\Curves;

use WlSdk\WlSdkClient;

/**
 * Returns accumulation data.
 */
class Accumulation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns accumulation data.
     *
     * @return AccumulationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccumulationGetRequest $request): AccumulationGetResponse
    {
        return new AccumulationGetResponse($this->client->request('/Wl/Business/Franchise/Report/Curves/Accumulation.json', $request->params(), 'GET'));
    }

    /**
     * Generates SABA files and uploads it to S3.
     *
     * @return AccumulationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AccumulationPostRequest $request): AccumulationPostResponse
    {
        return new AccumulationPostResponse($this->client->request('/Wl/Business/Franchise/Report/Curves/Accumulation.json', $request->params(), 'POST'));
    }
}
