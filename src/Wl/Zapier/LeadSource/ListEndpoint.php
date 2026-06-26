<?php

namespace WlSdk\Wl\Zapier\LeadSource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zapier/LeadSource/List.json
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
     * Calls GET /Wl/Zapier/LeadSource/List.json.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Zapier/LeadSource/List.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Zapier/LeadSource/List.json.
     *
     * @return ListEndpointPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ListEndpointPostRequest $request): ListEndpointPostResponse
    {
        return new ListEndpointPostResponse($this->client->request('/Wl/Zapier/LeadSource/List.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Zapier/LeadSource/List.json.
     *
     * @return ListEndpointPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ListEndpointPutRequest $request): ListEndpointPutResponse
    {
        return new ListEndpointPutResponse($this->client->request('/Wl/Zapier/LeadSource/List.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/Zapier/LeadSource/List.json.
     *
     * @return ListEndpointPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(ListEndpointPatchRequest $request): ListEndpointPatchResponse
    {
        return new ListEndpointPatchResponse($this->client->request('/Wl/Zapier/LeadSource/List.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/Zapier/LeadSource/List.json.
     *
     * @return ListEndpointDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ListEndpointDeleteRequest $request): ListEndpointDeleteResponse
    {
        return new ListEndpointDeleteResponse($this->client->request('/Wl/Zapier/LeadSource/List.json', $request->params(), 'DELETE'));
    }
}
