<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffViewGetResponseClassDayClassPeriod
{
    /**
     * The session start time in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_time = null;

    /**
     * The session duration in seconds.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The class name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Direct book URL of this class.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    public function __construct(array $data)
    {
        $this->dt_time = isset($data['dt_time']) ? (string)$data['dt_time'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_book = isset($data['url_book']) ? (string)$data['url_book'] : null;
    }
}
