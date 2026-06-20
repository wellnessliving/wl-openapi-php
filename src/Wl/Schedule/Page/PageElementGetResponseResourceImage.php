<?php
namespace WlSdk\Wl\Schedule\Page;

class PageElementGetResponseResourceImage
{
    /**
     * Image data.
     *
     * @var PageElementGetResponseResourceImageImage|null
     */
    public ?PageElementGetResponseResourceImageImage $a_image = null;

    /**
     * Angle of shape rotation. Is set only if `sid_image` equals to `shape`.
     *
     * @var int|null
     */
    public ?int $i_angle = null;

    /**
     * Height of image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Whether is empty.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Image kind. String representation of one of {@link \WlSdk\Wl\Resource\Image\ImageSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_image = null;

    /**
     * Icon name.String representation of one of {@link \WlSdk\Wl\Resource\Image\ImageIconSid} constants.
     * Is set only if `sid_image` equals to `image`.
     *
     * @var string|null
     */
    public ?string $sid_image_icon = null;

    /**
     * Shape name. String representation of one of {@link \WlSdk\Wl\Resource\Image\ImageShapeSid} constants.
     * Is set only if `sid_image` equals to `shape`.
     *
     * @var string|null
     */
    public ?string $sid_image_shape = null;

    /**
     * Path to image.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new PageElementGetResponseResourceImageImage((array)$data['a_image']) : null;
        $this->i_angle = isset($data['i_angle']) ? (int)$data['i_angle'] : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->sid_image = isset($data['sid_image']) ? (string)$data['sid_image'] : null;
        $this->sid_image_icon = isset($data['sid_image_icon']) ? (string)$data['sid_image_icon'] : null;
        $this->sid_image_shape = isset($data['sid_image_shape']) ? (string)$data['sid_image_shape'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
