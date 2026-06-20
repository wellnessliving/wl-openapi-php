<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoGetResponseResourceLayoutClient
{
    /**
     * User's name.
     *
     * @var string|null
     */
    public ?string $text_client = null;

    /**
     * User's primary key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->text_client = isset($data['text_client']) ? (string)$data['text_client'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
