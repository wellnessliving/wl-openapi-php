<?php

namespace WlSdk\Wl\Login\Code;

use WlSdk\WlSdkClient;

/**
 * Applies login code.
 */
class Code
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Applies login code.
     *
     * @return CodePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CodePostRequest $request): CodePostResponse
    {
        return new CodePostResponse($this->client->request('/Wl/Login/Code/Code.json', $request->params(), 'POST'));
    }
}
