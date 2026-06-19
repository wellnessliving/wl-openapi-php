<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video category.
 */
class CategoryElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data for the specified video category.
     *
     * Returns the title, sort order, access restriction flags (by login type and member group),
     * and whether this category is designated as the cloud recording destination for the business.
     *
     * @return CategoryElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryElementGetRequest $request): CategoryElementGetResponse
    {
        return new CategoryElementGetResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $request->params(), 'GET'));
    }
}
