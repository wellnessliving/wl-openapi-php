<?php

namespace WlSdk\Wl\Staff;

class StaffPastWorkTimeOptionPostRequest
{
    /**
     * Business key within which setting is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Option value.
     *
     * @var string|null
     */
    public ?string $show_work_time_past = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'show_work_time_past' => $this->show_work_time_past,
            ],
            static fn ($v) => $v !== null
        );
    }
}
