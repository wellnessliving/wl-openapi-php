<?php

namespace WlSdk\Wl\Service\ServiceList;

use WlSdk\WlSdkClient;

/**
 * Returns list of appointment type in the business.
 */
class List75
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of appointment type in the business.
     *
     * Gets key of the business and returns all available appointment types with their names and categories.
     *
     * @return List75GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(List75GetRequest $request): List75GetResponse
    {
        return new List75GetResponse($this->client->request('/Wl/Service/ServiceList/List75.json', $request->params(), 'GET'));
    }
}
