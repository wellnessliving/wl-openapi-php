<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Resource;

class ScheduleListResourceGetResponseResource
{
    /**
     * Data of asset image.
     *
     * @var ScheduleListResourceGetResponseResourceImage|null
     */
    public ?ScheduleListResourceGetResponseResourceImage $a_image = null;

    /**
     * Asset title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ScheduleListResourceGetResponseResourceImage((array)$data['a_image']) : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
