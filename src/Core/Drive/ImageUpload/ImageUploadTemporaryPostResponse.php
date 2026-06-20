<?php

namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from POST
 */
class ImageUploadTemporaryPostResponse
{
    /**
     * If `true`, a crop is used. Otherwise, this will be `false` if a crop isn't used (the image is saved in its
     * original size).
     *
     * @var bool|null
     */
    public ?bool $has_crop = null;

    /**
     * The actual height of the thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The height of the original image.
     *
     * @var int|null
     */
    public ?int $i_height_src = null;

    /**
     * The angle of the image rotation compared to the original.
     *
     * @var int|null
     */
    public ?int $i_rotate = null;

    /**
     * The actual width of the thumbnail image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * The width of the original image.
     *
     * @var int|null
     */
    public ?int $i_width_src = null;

    /**
     * The image type ID. One of the {@link \WlSdk\Core\Drive\DriveTypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_type_src = null;

    /**
     * If `true`, the thumbnail is a resized variant of the original image.
     *
     * @var bool|null
     */
    public ?bool $is_resize = null;

    /**
     * The URL to the resized and rotated image in file storage.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * The URL to the original image in file storage.
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
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
    }
}
