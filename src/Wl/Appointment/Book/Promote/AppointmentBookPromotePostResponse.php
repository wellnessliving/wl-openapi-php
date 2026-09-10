<?php

namespace WlSdk\Wl\Appointment\Book\Promote;

/**
 * Response from POST
 */
class AppointmentBookPromotePostResponse
{
    /**
     * Whether is awaiting for user confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_wait_confirm = null;

    public function __construct(array $data)
    {
        $this->is_wait_confirm = isset($data['is_wait_confirm']) ? (bool)$data['is_wait_confirm'] : null;
    }
}
