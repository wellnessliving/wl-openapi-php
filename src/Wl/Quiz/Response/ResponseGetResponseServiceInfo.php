<?php

namespace WlSdk\Wl\Quiz\Response;

class ResponseGetResponseServiceInfo
{
    /**
     * Formatted visit date and time in the location's time zone.
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Service title.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Comma-separated list of full names of staff members conducting the visit.
     *
     * @var string|null
     */
    public ?string $text_staff_member = null;

    public function __construct(array $data)
    {
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_staff_member = isset($data['text_staff_member']) ? (string)$data['text_staff_member'] : null;
    }
}
