<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Returns information about the image.
 */
class ImageUpload
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
     * @return ImageUploadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImageUploadGetRequest $request): ImageUploadGetResponse
    {
        return new ImageUploadGetResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $request->params(), 'GET'));
    }

    /**
     * Loads image information for a list of IDs.
The POST method is used instead of the GET method because the maximum permitted URI length is restricted.
     *
     * Bulk variant of the GET method for pages that must display many images at once. Accepts a JSON-encoded
     * list of entity IDs and returns the same metadata as the single-item GET, loading all images in one
     * round-trip to avoid N+1 requests.
     *
     * @return ImageUploadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImageUploadPostRequest $request): ImageUploadPostResponse
    {
        return new ImageUploadPostResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $request->params(), 'POST'));
    }

    /**
     * Updates the image.
     *
     * Applies a command (such as delete or replace) to a previously uploaded image, then returns the
     * refreshed image metadata so the frontend can update the widget state without a separate GET call.
     *
     * @return ImageUploadPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ImageUploadPutRequest $request): ImageUploadPutResponse
    {
        return new ImageUploadPutResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $request->params(), 'PUT'));
    }
}
