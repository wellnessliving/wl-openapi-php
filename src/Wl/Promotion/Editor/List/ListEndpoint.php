<?php

namespace WlSdk\Wl\Promotion\Editor\List;

use WlSdk\WlSdkClient;

/**
 * Gets the page of the list of Purchase Options of the business.
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
     * Gets the page of the list of Purchase Options of the business.
     *
     * The list holds the Purchase Options of the business that were not removed, filtered by the search words, the
     * status, the type, the service category, the store category and the location, in the requested order. The
     * daily
     * deals, the enrollments, the programs of the services that the business has switched off and the programs
     * that
     * the user has no right to see are never listed.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Promotion/Editor/List/List.json', $request->params(), 'GET'));
    }
}
