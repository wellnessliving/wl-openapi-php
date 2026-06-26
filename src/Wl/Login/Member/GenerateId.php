<?php

namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Member/GenerateId.json
 */
class GenerateId
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Login/Member/GenerateId.json.
     *
     * @return GenerateIdPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GenerateIdPostRequest $request): GenerateIdPostResponse
    {
        return new GenerateIdPostResponse($this->client->request('/Wl/Login/Member/GenerateId.json', $request->params(), 'POST'));
    }
}
