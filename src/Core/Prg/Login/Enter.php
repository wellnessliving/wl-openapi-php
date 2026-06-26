<?php

namespace WlSdk\Core\Prg\Login;

use WlSdk\WlSdkClient;

/**
 * Signs programmer in.
 */
class Enter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs programmer in.
     *
     * @return EnterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EnterPostRequest $request): EnterPostResponse
    {
        return new EnterPostResponse($this->client->request('/Core/Prg/Login/Enter.json', $request->params(), 'POST'));
    }
}
