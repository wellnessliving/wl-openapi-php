<?php

namespace WlSdk\Wl\Schedule;

class ScheduleGetRequest
{
    /**
     * Whether API is called in the backend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether the schedule is shown in the widget.
     *
     * @var bool|null
     */
    public ?bool $is_widget = null;

    /**
     * Business key for which schedule should be got.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Parameters and filters of the schedule encoded by Javascript analogue of the UrlEncode::encode() method.
     *
     * @var string|null
     */
    public ?string $s_data = null;

    /**
     * User key who get the schedule.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL to the controller which were used before API to show the schedule. Used to create URL for printing
     * schedule.
     *
     * @var string|null
     */
    public ?string $url_page = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_widget' => $this->is_widget,
            'k_business' => $this->k_business,
            's_data' => $this->s_data,
            'uid' => $this->uid,
            'url_page' => $this->url_page,
            ],
            static fn ($v) => $v !== null
        );
    }
}
