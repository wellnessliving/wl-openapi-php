<?php

namespace WlSdk\Wl\Mail\Pattern\Disturb;

class DisturbGetResponseDisturb
{
    /**
     * The end time of the do not disturb period, in seconds since midnight.
     *
     * @var int|null
     */
    public ?int $i_end = null;

    /**
     * The start time of the do not disturb period, in seconds since midnight.
     *
     * @var int|null
     */
    public ?int $i_start = null;

    public function __construct(array $data)
    {
        $this->i_end = isset($data['i_end']) ? (int)$data['i_end'] : null;
        $this->i_start = isset($data['i_start']) ? (int)$data['i_start'] : null;
    }
}
