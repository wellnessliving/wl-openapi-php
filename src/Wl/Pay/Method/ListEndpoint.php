<?php

namespace WlSdk\Wl\Pay\Method;

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
     * Returns the system-level payment methods enabled for the business combined with any custom payment methods
     * configured for the business and accessible to the given user based on their role. When `$is_active` is
     * `false`, inactive custom methods are included as well.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Pay/Method/List.json', $request->params(), 'GET'));
    }
}
