<?php

namespace WlSdk\Wl\Login\Attendance\Add;

class AddPostResponseBookBackground
{
    /**
     * The date and time of the session in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
    }
}
