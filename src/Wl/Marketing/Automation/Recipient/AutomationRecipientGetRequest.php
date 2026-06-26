<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

class AutomationRecipientGetRequest
{
    /**
     * End date filter.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date filter.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
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
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
