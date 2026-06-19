<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified video category.
 */
class CategoryElementDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the specified video category.
     *
     * Permanently removes the video category and its localized CMS records. Cannot be deleted
     * if the category is currently configured as the cloud recording destination for the business.
     *
     * @return CategoryElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CategoryElementDeleteRequest $request): CategoryElementDeleteResponse
    {
        return new CategoryElementDeleteResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $request->params(), 'DELETE'));
    }
}
