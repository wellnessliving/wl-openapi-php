<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

class Calendar73GetResponseWeekName
{
    /**
     * Week day, one of the {@link \WlSdk\ADateWeekSid} constants.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * Short week day's name (2 letters, i.e. 'Fr').
     *
     * @var string|null
     */
    public ?string $html_week_day = null;

    public function __construct(array $data)
    {
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
        $this->html_week_day = isset($data['html_week_day']) ? (string)$data['html_week_day'] : null;
    }
}
