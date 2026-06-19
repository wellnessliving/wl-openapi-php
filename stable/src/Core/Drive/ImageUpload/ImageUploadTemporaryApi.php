<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Saves new uploaded image.
 */
class ImageUploadTemporaryApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The key of the image within `s_class`.

For example, for a user's photo, specify the user's key here.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The name of the class that manages this image.

For example, for a user's photo, specify the string `PassportLoginImage` here.
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
     * @return array Parsed JSON response data.
     *   - bool has_crop: If `true`, a crop is used. Otherwise, this will be `false` if a crop isn't used (the image is saved in its original size).
     *   - int i_height: The actual height of the thumbnail image.
     *   - int i_height_src: The height of the original image.
     *   - int i_rotate: The angle of the image rotation compared to the original.
     *   - int i_width: The actual width of the thumbnail image.
     *   - int i_width_src: The width of the original image.
     *   - int id_type_src: The image type ID. One of the [DriveTypeSid](#/components/schemas/Core.Drive.DriveTypeSid) constants.
     *   - bool is_resize: If `true`, the thumbnail is a resized variant of the original image.
     *   - string url_thumbnail: The URL to the resized and rotated image in file storage.
     *   - string url_view: The URL to the original image in file storage.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Drive/ImageUpload/ImageUploadTemporary.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_id' => $this->k_id,
            's_class' => $this->s_class,
            'f_image' => $this->f_image,
            ],
            static fn($v) => $v !== null
        );
    }
}
