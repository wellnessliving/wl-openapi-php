<?php

namespace WlSdk\Wl\Shop\Category\StaffApp;

use WlSdk\WlSdkClient;

/**
 * This method is called to process GET query.
 */
class Category
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process GET query.
     *
     * @return CategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryGetRequest $request): CategoryGetResponse
    {
        return new CategoryGetResponse($this->client->request('/Wl/Shop/Category/StaffApp/Category.json', $request->params(), 'GET'));
    }
}
