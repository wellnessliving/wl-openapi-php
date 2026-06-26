<?php

namespace WlSdk\Wl\Business\Header;

use WlSdk\WlSdkClient;

/**
 * Performs all necessary checks, as well as prepares and returns data.
 */
class Owner
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs all necessary checks, as well as prepares and returns data.
     *
     * @return OwnerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OwnerGetRequest $request): OwnerGetResponse
    {
        return new OwnerGetResponse($this->client->request('/Wl/Business/Header/Owner.json', $request->params(), 'GET'));
    }
}
