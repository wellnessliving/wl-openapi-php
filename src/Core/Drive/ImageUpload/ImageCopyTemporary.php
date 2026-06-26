<?php

namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Makes a temporary copy of the specified image.
 */
class ImageCopyTemporary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Makes a temporary copy of the specified image.
     *
     * @return ImageCopyTemporaryPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImageCopyTemporaryPostRequest $request): ImageCopyTemporaryPostResponse
    {
        return new ImageCopyTemporaryPostResponse($this->client->request('/Core/Drive/ImageUpload/ImageCopyTemporary.json', $request->params(), 'POST'));
    }
}
