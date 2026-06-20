<?php

namespace WlSdk\Wl\Video;

class VideoElementGetResponseStaffInfo
{
    /**
     * <b>Deprecated</b> The staff member key.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The staff member's full name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * The staff user ID.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
