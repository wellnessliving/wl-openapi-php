<?php

namespace WlSdk\Wl\Classes\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the categories of classes and of events of a business.
 */
class CategoryList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the categories of classes and of events of a business.
     *
     * Every class and every event of a business belongs to one of its categories. Classes and events have separate
     * lists of categories: `is_event` tells the kind of each category. The list has no counts and no other
     * settings
     * of the setup page.
     *
     * @return CategoryListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryListGetRequest $request): CategoryListGetResponse
    {
        return new CategoryListGetResponse($this->client->request('/Wl/Classes/Category/CategoryList.json', $request->params(), 'GET'));
    }
}
