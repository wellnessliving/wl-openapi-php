<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoByTokenGetResponseStaffLogo
{
    /**
     * Height in pixels.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width in pixels.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Image URL.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
