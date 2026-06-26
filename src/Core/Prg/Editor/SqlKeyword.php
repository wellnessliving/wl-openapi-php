<?php

namespace WlSdk\Core\Prg\Editor;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/Editor/SqlKeyword.json
 */
class SqlKeyword
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Prg/Editor/SqlKeyword.json.
     *
     * @return SqlKeywordGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SqlKeywordGetRequest $request): SqlKeywordGetResponse
    {
        return new SqlKeywordGetResponse($this->client->request('/Core/Prg/Editor/SqlKeyword.json', $request->params(), 'GET'));
    }
}
