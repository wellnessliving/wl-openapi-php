<?php

namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/Response/ResponseClone.json
 */
class ResponseClone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Quiz/Response/ResponseClone.json.
     *
     * @return ResponseClonePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ResponseClonePutRequest $request): ResponseClonePutResponse
    {
        return new ResponseClonePutResponse($this->client->request('/Wl/Quiz/Response/ResponseClone.json', $request->params(), 'PUT'));
    }
}
