<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceListGetResponseListWaitResource
{
    /**
     * Index of the resource among multiple assets. `0` if the resource was booked from the wait list.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Resource layout alias.
     *
     * @var string|null
     */
    public ?string $text_alias = null;

    /**
     * Resource title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->text_alias = isset($data['text_alias']) ? (string)$data['text_alias'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
