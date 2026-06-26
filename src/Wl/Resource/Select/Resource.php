<?php

namespace WlSdk\Wl\Resource\Select;

use WlSdk\WlSdkClient;

/**
 * Returns resources list in the business.
 */
class Resource
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns resources list in the business.
     *
     * @return ResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourceGetRequest $request): ResourceGetResponse
    {
        return new ResourceGetResponse($this->client->request('/Wl/Resource/Select/Resource.json', $request->params(), 'GET'));
    }
}
