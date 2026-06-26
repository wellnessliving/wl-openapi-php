<?php

namespace WlSdk\Wl\Marketing\Overview\CampaignPerformance;

class CampaignPerformanceGetRequest
{
    /**
     * End date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Business key.
     * `null` to use the system business of the current user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
