<?php

namespace WlSdk\Thoth\WlPay\Method;

use WlSdk\WlSdkClient;

/**
 * Returns list of active payment methods data.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of active payment methods data.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Thoth/WlPay/Method/List.json', $request->params(), 'GET'));
    }
}
