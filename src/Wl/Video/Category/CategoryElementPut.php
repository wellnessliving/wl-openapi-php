<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Creates or updates a video category.
 */
class CategoryElementPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
