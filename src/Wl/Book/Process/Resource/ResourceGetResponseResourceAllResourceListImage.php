<?php
namespace WlSdk\Wl\Book\Process\Resource;

class ResourceGetResponseResourceAllResourceListImage
{
    /**
     * Angle of shape rotation. Set only when `sid_image` equals 'shape'.
     *
     * @var int|null
     */
    public ?int $i_angle = null;

    /**
     * Height of the image in pixels.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of the image in pixels.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` if no image was uploaded, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Image kind. One of {@link \WlSdk\Wl\Resource\Image\ImageSid} string constants.
     *
     * @var string|null
     */
    public ?string $sid_image = null;

    /**
     * Icon name. One of {@link \WlSdk\Wl\Resource\Image\ImageIconSid} string constants.
     * Set only when `sid_image` equals 'icon'.
     *
     * @var string|null
     */
    public ?string $sid_image_icon = null;

    /**
     * Shape name. One of {@link \WlSdk\Wl\Resource\Image\ImageShapeSid} string constants.
     * Set only when `sid_image` equals 'shape'.
     *
     * @var string|null
     */
    public ?string $sid_image_shape = null;

    /**
     * Thumbnail image URL.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->i_angle = isset($data['i_angle']) ? (int)$data['i_angle'] : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->sid_image = isset($data['sid_image']) ? (string)$data['sid_image'] : null;
        $this->sid_image_icon = isset($data['sid_image_icon']) ? (string)$data['sid_image_icon'] : null;
        $this->sid_image_shape = isset($data['sid_image_shape']) ? (string)$data['sid_image_shape'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
