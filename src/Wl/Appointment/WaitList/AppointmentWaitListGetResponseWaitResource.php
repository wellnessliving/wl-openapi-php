<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWaitResource
{
    /**
     * Title of the resource.
     *
     * @var string|null
     */
    public ?string $text_resource = null;

    /**
     * Title of the resource type.
     *
     * @var string|null
     */
    public ?string $text_resource_type = null;

    public function __construct(array $data)
    {
        $this->text_resource = isset($data['text_resource']) ? (string)$data['text_resource'] : null;
        $this->text_resource_type = isset($data['text_resource_type']) ? (string)$data['text_resource_type'] : null;
    }
}
