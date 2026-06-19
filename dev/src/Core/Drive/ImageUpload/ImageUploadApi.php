<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Returns information about the image.
 */
class ImageUploadApi
{
    /**
     * Allows to give custom parameters which can be required for different types of images.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * If `true`, the temporary image will be retrieved. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_temporary = null;

    /**
     * The image ID set in `s_class`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The name of the class that manages this image.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * A list of image IDs set in `s_class`, serialized using JSON.
     * 
     * This will be `null` if there's no data being sent by the client.
     *
     * @var string|null
     */
    public ?string $text_id = null;

    /**
     * The action that must be performed to the image.
     *
     * @var string|null
     */
    public ?string $s_command = null;

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
     * @return ImageUploadApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ImageUploadApiGetResponse
    {
        return new ImageUploadApiGetResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'GET'));
    }

    /**
     * Loads image information for a list of IDs.
The POST method is used instead of the GET method because the maximum permitted URI length is restricted.
     *
     * Bulk variant of the GET method for pages that must display many images at once. Accepts a JSON-encoded
     * list of entity IDs and returns the same metadata as the single-item GET, loading all images in one
     * round-trip to avoid N+1 requests.
     *
     * @return ImageUploadApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ImageUploadApiPostResponse
    {
        return new ImageUploadApiPostResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'POST'));
    }

    /**
     * Updates the image.
     *
     * Applies a command (such as delete or replace) to a previously uploaded image, then returns the
     * refreshed image metadata so the frontend can update the widget state without a separate GET call.
     *
     * @return ImageUploadApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): ImageUploadApiPutResponse
    {
        return new ImageUploadApiPutResponse($this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'is_temporary' => $this->is_temporary,
            'k_id' => $this->k_id,
            's_class' => $this->s_class,
            'text_id' => $this->text_id,
            's_command' => $this->s_command,
            ],
            static fn($v) => $v !== null
        );
    }
}
