<?php

namespace WlSdk\Wl\Drive;

use WlSdk\WlSdkClient;

/**
 * Returns information about the image.
 */
class ProductImageUpload
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about the image.
     *
     * Used to initialize an image upload widget for an existing entity. Returns thumbnail and full-size URLs,
     * upload endpoint, dimension constraints, and whether deletion is allowed, so the frontend can render the
     * current image and offer upload or delete actions.
     *
     * @return ProductImageUploadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProductImageUploadGetRequest $request): ProductImageUploadGetResponse
    {
        return new ProductImageUploadGetResponse($this->client->request('/Wl/Drive/ProductImageUpload.json', $request->params(), 'GET'));
    }

    /**
     * Loads image information for a list of IDs.
The POST method is used instead of the GET method because the maximum permitted URI length is restricted.
     *
     * Bulk variant of the GET method for pages that must display many images at once. Accepts a JSON-encoded
     * list of entity IDs and returns the same metadata as the single-item GET, loading all images in one
     * round-trip to avoid N+1 requests.
     *
     * @return ProductImageUploadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProductImageUploadPostRequest $request): ProductImageUploadPostResponse
    {
        return new ProductImageUploadPostResponse($this->client->request('/Wl/Drive/ProductImageUpload.json', $request->params(), 'POST'));
    }

    /**
     * Updates the image.
     *
     * Applies a command (such as delete or replace) to a previously uploaded image, then returns the
     * refreshed image metadata so the frontend can update the widget state without a separate GET call.
     *
     * @return ProductImageUploadPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ProductImageUploadPutRequest $request): ProductImageUploadPutResponse
    {
        return new ProductImageUploadPutResponse($this->client->request('/Wl/Drive/ProductImageUpload.json', $request->params(), 'PUT'));
    }
}
