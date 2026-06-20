<?php
namespace WlSdk\Wl\Reception\Roster\Design;

class ReceptionRosterDesignGetResponseImage
{
    /**
     * Requested image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Original image height.
     *
     * @var int|null
     */
    public ?int $i_height_src = null;

    /**
     * Requested image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Original image width.
     *
     * @var int|null
     */
    public ?int $i_width_src = null;

    /**
     * Image type ID. One of {@link \WlSdk\Core\Drive\DriveTypeSid} constants.
     *  Will be present only for \Core\Drive\Drive images.
     *
     * @var \WlSdk\Core\Drive\DriveTypeSid|null
     */
    public ?\WlSdk\Core\Drive\DriveTypeSid $id_type_src = null;

    /**
     * Whether image was resized to satisfy specified
     *  `i_width` and `i_height`.
     *
     * @var bool|null
     */
    public ?bool $is-resize = null;

    /**
     * Url to requested image.
     *
     * @var string|null
     */
    public ?string $url-thumbnail = null;

    /**
     * Url to original image.
     *
     * @var string|null
     */
    public ?string $url-view = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_height_src = isset($data['i_height_src']) ? (int)$data['i_height_src'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->i_width_src = isset($data['i_width_src']) ? (int)$data['i_width_src'] : null;
        $this->id_type_src = isset($data['id_type_src']) ? \WlSdk\Core\Drive\DriveTypeSid::tryFrom((int)$data['id_type_src']) : null;
        $this->is-resize = isset($data['is-resize']) ? (bool)$data['is-resize'] : null;
        $this->url-thumbnail = isset($data['url-thumbnail']) ? (string)$data['url-thumbnail'] : null;
        $this->url-view = isset($data['url-view']) ? (string)$data['url-view'] : null;
    }
}
