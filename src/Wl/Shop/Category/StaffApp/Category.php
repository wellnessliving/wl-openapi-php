<?php

namespace WlSdk\Wl\Shop\Category\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Loads the list of online store categories for the business.
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
     * Loads the list of online store categories for the business.
     *
     * Returns the active shop categories configured for the business, together with their order,
     *  title and description. The result is left unset when the business has no shop categories.
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
