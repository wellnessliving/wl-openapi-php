<?php

namespace WlSdk\Core\Spa\Model;

use WlSdk\WlSdkClient;

/**
 * Processes the requested model.
 * Finds the appropriate API class and executes the get method.
 */
class ModelPool
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the requested model.
Finds the appropriate API class and executes the get method.
     *
     * @return ModelPoolPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ModelPoolPostRequest $request): ModelPoolPostResponse
    {
        return new ModelPoolPostResponse($this->client->request('/Core/Spa/Model/ModelPool.json', $request->params(), 'POST'));
    }
}
