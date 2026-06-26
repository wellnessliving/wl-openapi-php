<?php

namespace WlSdk\Core\Cms;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Cms/TranslateState.json
 */
class TranslateState
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Core/Cms/TranslateState.json.
     *
     * @return TranslateStatePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TranslateStatePutRequest $request): TranslateStatePutResponse
    {
        return new TranslateStatePutResponse($this->client->request('/Core/Cms/TranslateState.json', $request->params(), 'PUT'));
    }
}
