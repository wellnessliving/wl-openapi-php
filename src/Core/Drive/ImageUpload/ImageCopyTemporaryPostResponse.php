<?php

namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from POST
 */
class ImageCopyTemporaryPostResponse
{
    /**
     * `true` - crop is used. `false` - crop is not used (the image is saved in the original size).
     *
     * @var bool|null
     */
    public ?bool $has_crop = null;

    /**
     * Actual height of thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Height of original image.
     *
     * @var int|null
     */
    public ?int $i_height_src = null;

    /**
     * Angle on which image was rotated compared to the original.
     *
     * @var int|null
     */
    public ?int $i_rotate = null;

    /**
     * Actual width of thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Width of original image.
     *
     * @var int|null
     */
    public ?int $i_width_src = null;

    /**
     * Image type ID. One of {@link \WlSdk\Core\Drive\DriveTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Drive\DriveTypeSid
     */
    public ?int $id_type_src = null;

    /**
     * `true` if thumbnail is a resized variant of original image.
     *
     * @var bool|null
     */
    public ?bool $is_resize = null;

    /**
     * Image link.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    /**
     * URL to resized and rotated image in file storage.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * URL to original image in file storage.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    public function __construct(array $data)
    {
        $this->has_crop = isset($data['has_crop']) ? (bool)$data['has_crop'] : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_height_src = isset($data['i_height_src']) ? (int)$data['i_height_src'] : null;
        $this->i_rotate = isset($data['i_rotate']) ? (int)$data['i_rotate'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->i_width_src = isset($data['i_width_src']) ? (int)$data['i_width_src'] : null;
        $this->id_type_src = isset($data['id_type_src']) ? (int)$data['id_type_src'] : null;
        $this->is_resize = isset($data['is_resize']) ? (bool)$data['is_resize'] : null;
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
    }
}
