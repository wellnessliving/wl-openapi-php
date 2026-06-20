<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListLogoB
{
    /**
     * Original image height in pixels.
     *
     * @var int|null
     */
    public ?int $i_height_src = null;

    /**
     * Rotation angle applied relative to the original.
     *
     * @var int|null
     */
    public ?int $i_rotate = null;

    /**
     * Original image width in pixels.
     *
     * @var int|null
     */
    public ?int $i_width_src = null;

    /**
     * Image type identifier.
     * One of {@link \WlSdk\Core\Drive\DriveTypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_type_src = null;

    /**
     * `true` if the image was resized; `false` if `url-thumbnail` equals `url-view`.
     *
     * @var bool|null
     */
    public ?bool $is_resize = null;

    /**
     * URL of the resized thumbnail image.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * URL of the original image in file storage.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    public function __construct(array $data)
    {
        $this->i_height_src = isset($data['i_height_src']) ? (int)$data['i_height_src'] : null;
        $this->i_rotate = isset($data['i_rotate']) ? (int)$data['i_rotate'] : null;
        $this->i_width_src = isset($data['i_width_src']) ? (int)$data['i_width_src'] : null;
        $this->id_type_src = isset($data['id_type_src']) ? (int)$data['id_type_src'] : null;
        $this->is_resize = isset($data['is-resize']) ? (bool)$data['is-resize'] : null;
        $this->url_thumbnail = isset($data['url-thumbnail']) ? (string)$data['url-thumbnail'] : null;
        $this->url_view = isset($data['url-view']) ? (string)$data['url-view'] : null;
    }
}
