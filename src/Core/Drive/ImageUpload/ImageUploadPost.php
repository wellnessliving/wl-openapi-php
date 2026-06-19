<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Loads image information for a list of IDs.
 * The POST method is used instead of the GET method because the maximum permitted URI length is restricted.
 */
class ImageUploadPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
