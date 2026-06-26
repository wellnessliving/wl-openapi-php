<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponsePhoto
{
    /**
     * Image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Image height.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Image URL.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
