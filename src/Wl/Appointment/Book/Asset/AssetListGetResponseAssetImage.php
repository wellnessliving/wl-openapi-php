<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetImage
{
    /**
     * The angle of the shape rotation. This is set only if the image is one of the default shapes.
     *
     * @var int|null
     */
    public ?int $i_angle = null;

    /**
     * Determines if the asset logo is empty.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * The icon name. String representation of one of the
     * [ImageIconSid](#/components/schemas/Wl.Resource.Image.ImageIconSid) constants. This is only set if the image
     * kind equals to `image`.
     *
     * @var string|null
     */
    public ?string $sid_image_icon = null;

    /**
     * The shape name. String representation of one of the
     * [ImageShapeSid](#/components/schemas/Wl.Resource.Image.ImageShapeSid) constants. This is set only if the
     * image kind equals to `shape`.
     *
     * @var string|null
     */
    public ?string $sid_image_shape = null;

    /**
     * The asset logo URL.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->i_angle = isset($data['i_angle']) ? (int)$data['i_angle'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->sid_image_icon = isset($data['sid_image_icon']) ? (string)$data['sid_image_icon'] : null;
        $this->sid_image_shape = isset($data['sid_image_shape']) ? (string)$data['sid_image_shape'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
