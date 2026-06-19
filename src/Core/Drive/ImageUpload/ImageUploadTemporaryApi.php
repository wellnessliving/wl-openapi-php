<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Saves new uploaded image.
 */
class ImageUploadTemporaryApi
{
    /**
     * The key of the image within `s_class`.
     * 
     * For example, for a user's photo, specify the user's key here.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The name of the class that manages this image.
     * 
     * For example, for a user's photo, specify the string `PassportLoginImage` here.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * The image to be uploaded.
     *
     * @var string|null
     */
    public ?string $f_image = null;

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
     * @return ImageUploadTemporaryApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ImageUploadTemporaryApiPostResponse
    {
        return new ImageUploadTemporaryApiPostResponse($this->client->request('/Core/Drive/ImageUpload/ImageUploadTemporary.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_id' => $this->k_id,
            's_class' => $this->s_class,
            'f_image' => $this->f_image,
            ],
            static fn($v) => $v !== null
        );
    }
}
