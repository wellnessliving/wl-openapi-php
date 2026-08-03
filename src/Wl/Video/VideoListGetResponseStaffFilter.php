<?php

namespace WlSdk\Wl\Video;

class VideoListGetResponseStaffFilter
{
    /**
     * Full name of the staff member.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key of the staff member.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Staff member key. Only for legacy applications.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    public function __construct(array $data)
    {
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
    }
}
