<?php

namespace WlSdk\Wl\Location\View;

class ViewGetResponseWork
{
    /**
     * The time of day end in MySQL format.
     *
     * @var string|null
     */
    public ?string $s_end = null;

    /**
     * The time of day start in MySQL format.
     *
     * @var string|null
     */
    public ?string $s_start = null;

    public function __construct(array $data)
    {
        $this->s_end = isset($data['s_end']) ? (string)$data['s_end'] : null;
        $this->s_start = isset($data['s_start']) ? (string)$data['s_start'] : null;
    }
}
