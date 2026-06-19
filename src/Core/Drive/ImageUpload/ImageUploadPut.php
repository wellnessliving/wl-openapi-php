<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Updates the image.
 */
class ImageUploadPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
