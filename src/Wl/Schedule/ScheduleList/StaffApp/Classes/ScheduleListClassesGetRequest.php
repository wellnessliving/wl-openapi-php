<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Classes;

class ScheduleListClassesGetRequest
{
    /**
     * `true` - to return events; `false` - to return classes.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_event' => $this->is_event,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
