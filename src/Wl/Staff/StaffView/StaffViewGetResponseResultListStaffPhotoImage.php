<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffViewGetResponseResultListStaffPhotoImage
{
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
     * Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
     * equals `url-view`.
     *
     * @var bool|null
     */
    public ?bool $is-resize = null;

    /**
     * URL to original image in file storage.
     *
     * @var string|null
     */
    public ?string $url-view = null;

    /**
     * URL to resized and rotated image in file storage. If the original is larger than
     * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
     * the link to the original image is returned here.
     *
     * @var string|null
     */
    public ?string $url-thumbnail = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_height_src = isset($data['i_height_src']) ? (int)$data['i_height_src'] : null;
        $this->i_rotate = isset($data['i_rotate']) ? (int)$data['i_rotate'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->i_width_src = isset($data['i_width_src']) ? (int)$data['i_width_src'] : null;
        $this->is-resize = isset($data['is-resize']) ? (bool)$data['is-resize'] : null;
        $this->url-view = isset($data['url-view']) ? (string)$data['url-view'] : null;
        $this->url-thumbnail = isset($data['url-thumbnail']) ? (string)$data['url-thumbnail'] : null;
    }
}
