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
     * When {@link \WlSdk\Wl\Resource\Type\ResourceTypeList} is set, the search is expanded to every
     *  business in the franchise and resource types that a franchisee already imported from the
     *  franchisor are skipped, so each resource type appears only once. The result can be
     *  narrowed to a single resource category with {@link \WlSdk\Wl\Resource\Type\ResourceTypeList}.
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
