<?php

namespace WlSdk\Wl\Book\Process\Frequency;

class RepeatParallelGetResponseVisit
{
    /**
     * Visit date and time in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Visit date and time in location's time zone.
     *
     * @var string|null
     */
    public ?string $dt_local = null;

    /**
     * List of names of the staff who provide this class.
     *
     * @var string|null
     */
    public ?string $html_short_name_list = null;

    /**
     * Location's time zone abbreviation.
     *
     * @var string|null
     */
    public ?string $html_timezone = null;

    /**
     * Number of open spots remaining for this session. `0` if the session is full.
     *
     * @var int|null
     */
    public ?int $i_spot = null;

    /**
     * Whether booking is not available for this day.
     *
     * @var bool|null
     */
    public ?bool $is_disable = null;

    /**
     * Whether booking is free for this day.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * Whether visit is from ignore list.
     *
     * @var bool|null
     */
    public ?bool $is_ignore = null;

    /**
     * `true` if this visit belongs to the originally selected class period's series (parent and its
     *    reschedules). `false` if it belongs to a parallel series running at the same time and location.
     *
     * @var bool|null
     */
    public ?bool $is_selected_series = null;

    /**
     * Whether booking can be only to wait list.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Staff name if booking available, warning about wait list or disabled booking otherwise.
     *
     * @var string|null
     */
    public ?string $s_alert = null;

    /**
     * Visit date and time in location's time zone in human-readable format.
     *
     * @var string|null
     */
    public ?string $s_date = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->dt_local = isset($data['dt_local']) ? (string)$data['dt_local'] : null;
        $this->html_short_name_list = isset($data['html_short_name_list']) ? (string)$data['html_short_name_list'] : null;
        $this->html_timezone = isset($data['html_timezone']) ? (string)$data['html_timezone'] : null;
        $this->i_spot = isset($data['i_spot']) ? (int)$data['i_spot'] : null;
        $this->is_disable = isset($data['is_disable']) ? (bool)$data['is_disable'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_ignore = isset($data['is_ignore']) ? (bool)$data['is_ignore'] : null;
        $this->is_selected_series = isset($data['is_selected_series']) ? (bool)$data['is_selected_series'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->s_alert = isset($data['s_alert']) ? (string)$data['s_alert'] : null;
        $this->s_date = isset($data['s_date']) ? (string)$data['s_date'] : null;
    }
}
