<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Returns information about the image.
 */
class ImageUploadGet
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
}
