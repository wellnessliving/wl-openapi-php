<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceGetResponseApplicationResourceGroupImage
{
    /**
     * A list of fully qualified file names. This name is used to save files in final archive.
     *
     * @var string[]|null
     */
    public ?array $a_file = null;

    /**
     * Specified if this image can have transparent pixels.
     * `true` if it is allowed that there be transparent pixels.
     * `false` if it is required that all pixels be opaque.
     *
     * @var bool|null
     */
    public ?bool $can_transparent = null;

    /**
     * Required image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Required image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Whether this image is required.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    public function __construct(array $data)
    {
        $this->a_file = isset($data['a_file']) ? (array)$data['a_file'] : null;
        $this->can_transparent = isset($data['can_transparent']) ? (bool)$data['can_transparent'] : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
    }
}
