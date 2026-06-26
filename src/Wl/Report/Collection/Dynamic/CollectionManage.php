<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about a dynamic collection.
 */
class CollectionManage
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about a dynamic collection.
     *
     * @return CollectionManageGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CollectionManageGetRequest $request): CollectionManageGetResponse
    {
        return new CollectionManageGetResponse($this->client->request('/Wl/Report/Collection/Dynamic/CollectionManage.json', $request->params(), 'GET'));
    }

    /**
     * Updates dynamic collection.
     *
     * @return CollectionManagePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CollectionManagePutRequest $request): CollectionManagePutResponse
    {
        return new CollectionManagePutResponse($this->client->request('/Wl/Report/Collection/Dynamic/CollectionManage.json', $request->params(), 'PUT'));
    }
}
