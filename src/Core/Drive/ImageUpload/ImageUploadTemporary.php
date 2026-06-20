<?php

namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Saves new uploaded image.
 */
class ImageUploadTemporary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new uploaded image.
     *
     * First step of the two-step image upload flow. Stores the uploaded file in temporary drive storage and
     * returns preview URLs and dimension metadata so the user can review or crop the image before it is
     * permanently saved. Call [ImageUploadApi](/Core/Drive/ImageUpload/ImageUpload.json) to commit the temporary
     * image to the entity.
     *
     * @return ImageUploadTemporaryPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImageUploadTemporaryPostRequest $request): ImageUploadTemporaryPostResponse
    {
        return new ImageUploadTemporaryPostResponse($this->client->request('/Core/Drive/ImageUpload/ImageUploadTemporary.json', $request->params(), 'POST'));
    }
}
