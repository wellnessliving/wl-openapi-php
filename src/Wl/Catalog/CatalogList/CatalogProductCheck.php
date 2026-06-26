<?php

namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Checking if client selected in a store when user in a backend
 */
class CatalogProductCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checking if client selected in a store when user in a backend
     *
     * @return CatalogProductCheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogProductCheckGetRequest $request): CatalogProductCheckGetResponse
    {
        return new CatalogProductCheckGetResponse($this->client->request('/Wl/Catalog/CatalogList/CatalogProductCheck.json', $request->params(), 'GET'));
    }
}
