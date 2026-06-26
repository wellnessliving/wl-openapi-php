<?php

namespace WlSdk\Wl\Appointment\Change;

/**
 * Response from POST
 */
class DurationPostResponse
{
    /**
     * Reload page.
     *
     * @var bool|null
     */
    public ?bool $is_reload = null;

    /**
     * To do nothing, skip all changes.
     *
     * @var bool|null
     */
    public ?bool $is_skip = null;

    /**
     * New appointment end time
     *
     * @var string|null
     */
    public ?string $s_time_end = null;

    public function __construct(array $data)
    {
        $this->is_reload = isset($data['is_reload']) ? (bool)$data['is_reload'] : null;
        $this->is_skip = isset($data['is_skip']) ? (bool)$data['is_skip'] : null;
        $this->s_time_end = isset($data['s_time_end']) ? (string)$data['s_time_end'] : null;
    }
}
