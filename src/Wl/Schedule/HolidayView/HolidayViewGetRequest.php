<?php

namespace WlSdk\Wl\Schedule\HolidayView;

class HolidayViewGetRequest
{
    /**
     * List of request holiday data to get information for. Each element has next structure:
     *
     * `null` for get info about single holiday by `k_holiday`.
     *
     * @var array[]|null
     */
    public ?array $a_holiday_request = null;

    /**
     * Holiday date to show.
     *
     * `null` for get info about single holiday by `a_holiday_request`.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Holiday key.
     *
     * `null` for get info about single holiday by `a_holiday_request`.
     *
     * @var string|null
     */
    public ?string $k_holiday = null;

    /**
     * Client timezone name to show.
     *
     * `null` when client not selected timezone in the profile.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_holiday_request' => $this->a_holiday_request,
            'dt_date' => $this->dt_date,
            'k_holiday' => $this->k_holiday,
            'text_timezone' => $this->text_timezone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
