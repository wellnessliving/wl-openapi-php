<?php
namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from GET
 */
class ImageUploadApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_text_empty = null;

    /**
     * An HTML string to use for the image recommendation.
     *
     * @var string|null
     */
    public ?string $html_image_hint = null;

    /**
     * The maximum height of image.
     *
     * @var int|null
     */
    public ?int $i_height_max = null;

    /**
     * The minimum height of image.
     *
     * @var int|null
     */
    public ?int $i_height_min = null;

    /**
     * The height of the thumbnail image.
     * This will be `null` until it's loaded from the server.
     *
     * @var int|null
     */
    public ?int $i_thumbnail_height = null;

    /**
     * The width of the thumbnail image.
     * This will be `null` until it's loaded from the server.
     *
     * @var int|null
     */
    public ?int $i_thumbnail_width = null;

    /**
     * The maximum width of the image.
     *
     * @var int|null
     */
    public ?int $i_width_max = null;

    /**
     * The minimum width of the image.
     *
     * @var int|null
     */
    public ?int $i_width_min = null;

    /**
     * If `true`, the image is treated as circular. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_circular = null;

    /**
     * If `true`, image deletion is permitted. Otherwise, this will be `false`.
     * 
     * This will be `null` until it's loaded from the server.
     *
     * @var bool|null
     */
    public ?bool $is_delete_allow = null;

    /**
     * The link protection code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * The image link.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    /**
     * The image URL that should be displayed in cases where no image is uploaded.
     * This will be `null` until it's loaded from the server.
     *
     * @var string|null
     */
    public ?string $url_empty = null;

    /**
     * The thumbnail URL of the image.
     * This will be `null` until it's loaded from the server.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * The script URL where new image should be uploaded from.
     *
     * @var string|null
     */
    public ?string $url_upload = null;

    /**
     * The URL of the full image.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    public function __construct(array $data)
    {
        $this->a_text_empty = isset($data['a_text_empty']) ? (array)$data['a_text_empty'] : null;
        $this->html_image_hint = isset($data['html_image_hint']) ? (string)$data['html_image_hint'] : null;
        $this->i_height_max = isset($data['i_height_max']) ? (int)$data['i_height_max'] : null;
        $this->i_height_min = isset($data['i_height_min']) ? (int)$data['i_height_min'] : null;
        $this->i_thumbnail_height = isset($data['i_thumbnail_height']) ? (int)$data['i_thumbnail_height'] : null;
        $this->i_thumbnail_width = isset($data['i_thumbnail_width']) ? (int)$data['i_thumbnail_width'] : null;
        $this->i_width_max = isset($data['i_width_max']) ? (int)$data['i_width_max'] : null;
        $this->i_width_min = isset($data['i_width_min']) ? (int)$data['i_width_min'] : null;
        $this->is_circular = isset($data['is_circular']) ? (bool)$data['is_circular'] : null;
        $this->is_delete_allow = isset($data['is_delete_allow']) ? (bool)$data['is_delete_allow'] : null;
        $this->s_code = isset($data['s_code']) ? (string)$data['s_code'] : null;
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
        $this->url_empty = isset($data['url_empty']) ? (string)$data['url_empty'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_upload = isset($data['url_upload']) ? (string)$data['url_upload'] : null;
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
    }
}
