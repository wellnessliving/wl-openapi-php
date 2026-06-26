<?php

namespace WlSdk\Wl\Resource\Type;

use WlSdk\WlSdkClient;

/**
 * Returns list of resource types in the business.
 */
class ResourceTypeList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of resource types in the business.
     *
     * @return ResourceTypeListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourceTypeListGetRequest $request): ResourceTypeListGetResponse
    {
        return new ResourceTypeListGetResponse($this->client->request('/Wl/Resource/Type/ResourceTypeList.json', $request->params(), 'GET'));
    }
}
