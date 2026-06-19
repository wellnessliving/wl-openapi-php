<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Updates the order of video categories.
 */
class CategoryListPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the order of video categories.
     *
     * Reorders the video library categories for the business according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return CategoryListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CategoryListPutRequest $request): CategoryListPutResponse
    {
        return new CategoryListPutResponse($this->client->request('/Wl/Video/Category/CategoryList.json', $request->params(), 'PUT'));
    }
}
