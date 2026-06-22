<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

class LifetimeTotalsGetResponseTotal
{
    /**
     * Total title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Total value.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function __construct(array $data)
    {
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
    }
}
