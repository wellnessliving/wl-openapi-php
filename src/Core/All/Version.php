<?php

namespace WlSdk\Core\All;

use WlSdk\WlSdkClient;

/**
 * Retrieves current application version number.
 */
class Version
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves current application version number.
     *
     * @return VersionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VersionGetRequest $request): VersionGetResponse
    {
        return new VersionGetResponse($this->client->request('/Core/All/Version.json', $request->params(), 'GET'));
    }
}
