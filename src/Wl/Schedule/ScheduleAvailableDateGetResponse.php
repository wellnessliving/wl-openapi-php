<?php
namespace WlSdk\Wl\Schedule;

/**
 * Response from GET
 */
class ScheduleAvailableDateGetResponse
{
    /**
     * Nearest session date available for booking in user's or business timezone.
     * 
     * `null` if there is no suitable session found.
     *
     * @var string|null
     */
    public ?string $dl_next_available = null;

    public function __construct(array $data)
    {
        $this->dl_next_available = isset($data['dl_next_available']) ? (string)$data['dl_next_available'] : null;
    }
}
