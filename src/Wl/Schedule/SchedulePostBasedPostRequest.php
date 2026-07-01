<?php

namespace WlSdk\Wl\Schedule;

class SchedulePostBasedPostRequest
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
     * User key who get the schedule.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Parameters and filters of the schedule encoded by Javascript analogue of the UrlEncode::encode() method.
     *
     * Sent in the POST body to avoid 414 errors with large filter sets.
     *
     * @var string|null
     */
    public ?string $s_data = null;

    /**
     * URL to the controller which were used before API to show the schedule. Used to create URL for printing
     * schedule.
     *
     * Sent in the POST body to avoid 414 errors because this URL includes `s_data`.
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
            'uid' => $this->uid,
            's_data' => $this->s_data,
            'url_page' => $this->url_page,
            ],
            static fn ($v) => $v !== null
        );
    }
}
