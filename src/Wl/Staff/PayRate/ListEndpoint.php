<?php

namespace WlSdk\Wl\Staff\PayRate;

use WlSdk\WlSdkClient;

/**
 * Loads the list of staff pay rates for the business.
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
     * Loads the list of staff pay rates for the business.
     *
     * When both `uid_staff` and `id_staff_pay` are given, returns the pay rates of that type
     *  available to the specified staff member at the given location. Otherwise, returns the
     *  full business pay-rate list. Applications outside the legacy allow-list do not receive
     *  the `k_staff` field in the result.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Staff/PayRate/List.json', $request->params(), 'GET'));
    }
}
