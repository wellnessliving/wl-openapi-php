<?php

namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Returns information about an application.
 */
class ApplicationElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about an application.
     *
     * @return ApplicationElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApplicationElementGetRequest $request): ApplicationElementGetResponse
    {
        return new ApplicationElementGetResponse($this->client->request('/Core/Request/Api/Application/ApplicationElement.json', $request->params(), 'GET'));
    }

    /**
     * Saves an application.
     *
     * @return ApplicationElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationElementPostRequest $request): ApplicationElementPostResponse
    {
        return new ApplicationElementPostResponse($this->client->request('/Core/Request/Api/Application/ApplicationElement.json', $request->params(), 'POST'));
    }

    /**
     * Deletes an application.
     *
     * @return ApplicationElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ApplicationElementDeleteRequest $request): ApplicationElementDeleteResponse
    {
        return new ApplicationElementDeleteResponse($this->client->request('/Core/Request/Api/Application/ApplicationElement.json', $request->params(), 'DELETE'));
    }
}
