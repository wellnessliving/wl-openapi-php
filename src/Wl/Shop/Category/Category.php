<?php
namespace WlSdk\Wl\Shop\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of shop categories available for the given business.
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
     * Returns the list of shop categories available for the given business.
     *
     * Returns all store categories that the current user is allowed to access, including their
     * titles, descriptions, and display order. Guest and client users see only public categories;
     * staff and admin users may see additional categories based on their access level.
     *
     * @return CategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryGetRequest $request): CategoryGetResponse
    {
        return new CategoryGetResponse($this->client->request('/Wl/Shop/Category/Category.json', $request->params(), 'GET'));
    }

    /**
     * Creates new shop category.
     *
     * Creates a new product category in the business store with the given title. Requires
     * backend access with the appropriate store management privilege.
     *
     * @return CategoryPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CategoryPostRequest $request): CategoryPostResponse
    {
        return new CategoryPostResponse($this->client->request('/Wl/Shop/Category/Category.json', $request->params(), 'POST'));
    }
}
