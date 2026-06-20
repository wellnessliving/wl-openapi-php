<?php
namespace WlSdk\Wl\Video;

class VideoListGetResponseListStaff
{
    /**
     * UID of the staff.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Full name of the staff.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Staff key. Only for legacy apps.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    public function __construct(array $data)
    {
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
    }
}
