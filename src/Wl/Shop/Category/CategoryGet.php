<?php
namespace WlSdk\Wl\Shop\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of shop categories available for the given business.
 */
class CategoryGet
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
}
