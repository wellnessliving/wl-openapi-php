<?php

namespace WlSdk\Wl\Profile\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets full list of ranks owned by the client.
 */
class Inheritance
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets full list of ranks owned by the client.
     *
     * @return InheritanceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InheritanceGetRequest $request): InheritanceGetResponse
    {
        return new InheritanceGetResponse($this->client->request('/Wl/Profile/Relation/Inheritance.json', $request->params(), 'GET'));
    }
}
