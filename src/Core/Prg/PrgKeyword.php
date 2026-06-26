<?php

namespace WlSdk\Core\Prg;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/PrgKeyword.json
 */
class PrgKeyword
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Prg/PrgKeyword.json.
     *
     * @return PrgKeywordGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PrgKeywordGetRequest $request): PrgKeywordGetResponse
    {
        return new PrgKeywordGetResponse($this->client->request('/Core/Prg/PrgKeyword.json', $request->params(), 'GET'));
    }
}
