<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video category.
 */
class CategoryElement
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

    /**
     * Creates or updates a video category.
     *
     * Saves the category title and access restriction settings. When no category key is supplied,
     * a new category is created; when an existing key is supplied, that category is updated.
     * Requires backend access with the video library management privilege.
     *
     * @return CategoryElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CategoryElementPutRequest $request): CategoryElementPutResponse
    {
        return new CategoryElementPutResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $request->params(), 'PUT'));
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
