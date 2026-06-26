<?php

namespace WlSdk\Core\Passport\Alive;

use WlSdk\WlSdkClient;

/**
 * Just refreshes session.
 */
class PassportAlive
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Just refreshes session.
     *
     * @return PassportAliveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PassportAliveGetRequest $request): PassportAliveGetResponse
    {
        return new PassportAliveGetResponse($this->client->request('/Core/Passport/Alive/PassportAlive.json', $request->params(), 'GET'));
    }
}
