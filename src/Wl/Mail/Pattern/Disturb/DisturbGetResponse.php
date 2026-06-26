<?php

namespace WlSdk\Wl\Mail\Pattern\Disturb;

/**
 * Response from GET
 */
class DisturbGetResponse
{
    /**
     * The start and end time for all the do not disturb periods for each mail page.
     * Each key is one of the {@link \WlSdk\RsMailPageSid} constants.
     * Each of the values will be `null` if the do not disturb period is not set for this mail page.
     * It will be an array with the following keys if set.
     *
     * @var DisturbGetResponseDisturb|null
     */
    public ?DisturbGetResponseDisturb $a_disturb = null;

    public function __construct(array $data)
    {
        $this->a_disturb = isset($data['a_disturb']) ? new DisturbGetResponseDisturb((array)$data['a_disturb']) : null;
    }
}
