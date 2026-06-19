<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video categories for the business.
 */
class CategoryListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video categories for the business.
     *
     * Returns all video categories for the business with their titles, video counts, and cloud
     * recording assignment. In frontend mode, only categories accessible to the current user are
     * included. Results can be filtered by name and optionally limited to non-empty categories.
     *
     * @return CategoryListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryListGetRequest $request): CategoryListGetResponse
    {
        return new CategoryListGetResponse($this->client->request('/Wl/Video/Category/CategoryList.json', $request->params(), 'GET'));
    }
}
