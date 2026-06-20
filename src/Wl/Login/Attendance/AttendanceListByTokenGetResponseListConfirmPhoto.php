<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListConfirmPhoto
{
    /**
     * The height of the photo.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width of the photo.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * This will be `true` if a photo hasn't been set yet.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * The URL of the photo.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
