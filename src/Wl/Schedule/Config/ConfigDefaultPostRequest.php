<?php

namespace WlSdk\Wl\Schedule\Config;

class ConfigDefaultPostRequest
{
    /**
     * ID of the predefined set of filters on the schedule.
     *
     * @var string|null
     */
    public ?string $k_schedule_config = null;

    /**
     * ID of the predefined set of filters on the schedule.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_schedule_config' => $this->k_schedule_config,
            'is_default' => $this->is_default,
            ],
            static fn ($v) => $v !== null
        );
    }
}
