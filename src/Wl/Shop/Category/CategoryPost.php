<?php
namespace WlSdk\Wl\Shop\Category;

use WlSdk\WlSdkClient;

/**
 * Creates new shop category.
 */
class CategoryPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
