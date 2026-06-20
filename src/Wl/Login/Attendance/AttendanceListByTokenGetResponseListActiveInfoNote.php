<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListActiveInfoNote
{
    /**
     * HTML text ready to be pasted in browser.
     *
     * @var string|null
     */
    public ?string $html_note = null;

    /**
     * `true` if this note has a flag; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    public function __construct(array $data)
    {
        $this->html_note = isset($data['html_note']) ? (string)$data['html_note'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
    }
}
