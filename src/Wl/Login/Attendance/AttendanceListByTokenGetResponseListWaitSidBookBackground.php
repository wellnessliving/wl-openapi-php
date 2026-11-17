<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListWaitSidBookBackground
{
    /**
     * No background task exists. Either all sessions were booked synchronously, or the background task has
     * completed.
     *
     * @var string|null
     */
    public ?string $none = null;

    /**
     * A background task is queued and waiting to be processed.
     *
     * @var string|null
     */
    public ?string $pending = null;

    /**
     * A background task exists but has no scheduled date, indicating a failure.
     *
     * @var string|null
     */
    public ?string $failed = null;

    public function __construct(array $data)
    {
        $this->none = isset($data['none']) ? (string)$data['none'] : null;
        $this->pending = isset($data['pending']) ? (string)$data['pending'] : null;
        $this->failed = isset($data['failed']) ? (string)$data['failed'] : null;
    }
}
