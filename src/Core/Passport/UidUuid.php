<?php

namespace WlSdk\Core\Passport;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Passport/UidUuid.json
 */
class UidUuid
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Passport/UidUuid.json.
     *
     * @return UidUuidPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UidUuidPostRequest $request): UidUuidPostResponse
    {
        return new UidUuidPostResponse($this->client->request('/Core/Passport/UidUuid.json', $request->params(), 'POST'));
    }
}
