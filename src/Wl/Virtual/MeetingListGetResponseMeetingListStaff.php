<?php

namespace WlSdk\Wl\Virtual;

class MeetingListGetResponseMeetingListStaff
{
    /**
     * Full name of the staff.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * Url photo of the staff.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    /**
     * Url for view information about the staff.
     *
     * @var string|null
     */
    public ?string $url_staff = null;

    public function __construct(array $data)
    {
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
        $this->url_staff = isset($data['url_staff']) ? (string)$data['url_staff'] : null;
    }
}
