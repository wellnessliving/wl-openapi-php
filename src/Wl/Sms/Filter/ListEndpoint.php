<?php

namespace WlSdk\Wl\Sms\Filter;

use WlSdk\WlSdkClient;

/**
 * Gets the blocked keyword list for the region.
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
     * Gets the blocked keyword list for the region.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Sms/Filter/List.json', $request->params(), 'GET'));
    }

    /**
     * Saves the blocked keyword list for a region. Then After saving, `text_keyword_list` Is
sorted alphabetically.
     *
     * @return ListEndpointPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ListEndpointPostRequest $request): ListEndpointPostResponse
    {
        return new ListEndpointPostResponse($this->client->request('/Wl/Sms/Filter/List.json', $request->params(), 'POST'));
    }
}
