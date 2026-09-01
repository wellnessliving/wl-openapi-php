<?php

namespace WlSdk\Wl\Profile\Attendance;

class AttendanceOverlapListPostRequest
{
    /**
     * List of sessions to check for overlaps. Every element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_session_list = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of a user to book for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_session_list' => $this->a_session_list,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
