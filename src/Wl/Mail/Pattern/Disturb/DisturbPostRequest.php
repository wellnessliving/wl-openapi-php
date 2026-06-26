<?php

namespace WlSdk\Wl\Mail\Pattern\Disturb;

class DisturbPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The start and end time for all the do not disturb periods for each mail page.
     * Each key is one of the {@link \WlSdk\RsMailPageSid} constants.
     * Each of the values will be `null` if the do not disturb period is not set for this mail page.
     * It will be an array with the following keys if set.
     *
     * @var array|null
     */
    public ?array $a_disturb = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_disturb' => $this->a_disturb,
            ],
            static fn ($v) => $v !== null
        );
    }
}
