<?php

namespace WlSdk\Wl\Drive;

class ProductImageUploadPostResponseImage
{
    /**
     * Information about the text on the empty upload image.
     *
     * @var ProductImageUploadPostResponseImageTextEmpty|null
     */
    public ?ProductImageUploadPostResponseImageTextEmpty $a_text_empty = null;

    /**
     * The maximum height of the image.
     *
     * @var int|null
     */
    public ?int $i_height_max = null;

    /**
     * The minimum height of the image.
     *
     * @var int|null
     */
    public ?int $i_height_min = null;

    /**
     * The height of the thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_thumbnail_height = null;

    /**
     * The width of thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_thumbnail_width = null;

    /**
     * The maximum width of image.
     *
     * @var int|null
     */
    public ?int $i_width_max = null;

    /**
     * The minimum width of image.
     *
     * @var int|null
     */
    public ?int $i_width_min = null;

    /**
     * `true` if image is treated as circular; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_circular = null;

    /**
     * `true` if image deleting is allowed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_delete_allow = null;

    /**
     * The image link.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    /**
     * The URL of the image that should be shown in a case image is not uploaded.
     *
     * @var string|null
     */
    public ?string $url_empty = null;

    /**
     * The URL of thumbnail of the image. `null` if image is not uploaded.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * The URL the script where new image should be uploaded.
     *
     * @var string|null
     */
    public ?string $url_upload = null;

    /**
     * The URL of the full image. `null` if image is not uploaded.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    public function __construct(array $data)
    {
        $this->a_text_empty = isset($data['a_text_empty']) ? new ProductImageUploadPostResponseImageTextEmpty((array)$data['a_text_empty']) : null;
        $this->i_height_max = isset($data['i_height_max']) ? (int)$data['i_height_max'] : null;
        $this->i_height_min = isset($data['i_height_min']) ? (int)$data['i_height_min'] : null;
        $this->i_thumbnail_height = isset($data['i_thumbnail_height']) ? (int)$data['i_thumbnail_height'] : null;
        $this->i_thumbnail_width = isset($data['i_thumbnail_width']) ? (int)$data['i_thumbnail_width'] : null;
        $this->i_width_max = isset($data['i_width_max']) ? (int)$data['i_width_max'] : null;
        $this->i_width_min = isset($data['i_width_min']) ? (int)$data['i_width_min'] : null;
        $this->is_circular = isset($data['is_circular']) ? (bool)$data['is_circular'] : null;
        $this->is_delete_allow = isset($data['is_delete_allow']) ? (bool)$data['is_delete_allow'] : null;
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
        $this->url_empty = isset($data['url_empty']) ? (string)$data['url_empty'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_upload = isset($data['url_upload']) ? (string)$data['url_upload'] : null;
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
    }
}
