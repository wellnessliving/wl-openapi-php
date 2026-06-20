<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoGetResponseLogo
{
    /**
     * Whether service image is empty.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Url link to image.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
