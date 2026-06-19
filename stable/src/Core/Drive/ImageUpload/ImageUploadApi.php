<?php
namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Returns information about the image.
 */
class ImageUploadApi
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

This will be `null` if there's no data being sent by the client.
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
     * @return array Parsed JSON response data.
     *   - array[] a_text_empty: No description.
     *   - string html_image_hint: An HTML string to use for the image recommendation.
     *   - int i_height_max: The maximum height of image.
     *   - int i_height_min: The minimum height of image.
     *   - int i_thumbnail_height: The height of the thumbnail image.
This will be `null` until it's loaded from the server.
     *   - int i_thumbnail_width: The width of the thumbnail image.
This will be `null` until it's loaded from the server.
     *   - int i_width_max: The maximum width of the image.
     *   - int i_width_min: The minimum width of the image.
     *   - bool is_circular: If `true`, the image is treated as circular. Otherwise, this will be `false`.
     *   - bool is_delete_allow: If `true`, image deletion is permitted. Otherwise, this will be `false`.

This will be `null` until it's loaded from the server.
     *   - string s_code: The link protection code.
     *   - string s_link: The image link.
     *   - string url_empty: The image URL that should be displayed in cases where no image is uploaded.
This will be `null` until it's loaded from the server.
     *   - string url_thumbnail: The thumbnail URL of the image.
This will be `null` until it's loaded from the server.
     *   - string url_upload: The script URL where new image should be uploaded from.
     *   - string url_view: The URL of the full image.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'GET');
    }

    /**
     * Loads image information for a list of IDs.
The POST method is used instead of the GET method because the maximum permitted URI length is restricted.
     *
     * Bulk variant of the GET method for pages that must display many images at once. Accepts a JSON-encoded
     * list of entity IDs and returns the same metadata as the single-item GET, loading all images in one
     * round-trip to avoid N+1 requests.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_image: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'POST');
    }

    /**
     * Updates the image.
     *
     * Applies a command (such as delete or replace) to a previously uploaded image, then returns the
     * refreshed image metadata so the frontend can update the widget state without a separate GET call.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_text_empty: No description.
     *   - string html_image_hint: An HTML string to use for the image recommendation.
     *   - int i_height_max: The maximum height of image.
     *   - int i_height_min: The minimum height of image.
     *   - int i_thumbnail_height: The height of the thumbnail image.
This will be `null` until it's loaded from the server.
     *   - int i_thumbnail_width: The width of the thumbnail image.
This will be `null` until it's loaded from the server.
     *   - int i_width_max: The maximum width of the image.
     *   - int i_width_min: The minimum width of the image.
     *   - bool is_circular: If `true`, the image is treated as circular. Otherwise, this will be `false`.
     *   - bool is_delete_allow: If `true`, image deletion is permitted. Otherwise, this will be `false`.

This will be `null` until it's loaded from the server.
     *   - string s_code: The link protection code.
     *   - string s_link: The image link.
     *   - string url_empty: The image URL that should be displayed in cases where no image is uploaded.
This will be `null` until it's loaded from the server.
     *   - string url_thumbnail: The thumbnail URL of the image.
This will be `null` until it's loaded from the server.
     *   - string url_upload: The script URL where new image should be uploaded from.
     *   - string url_view: The URL of the full image.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Core/Drive/ImageUpload/ImageUpload.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
