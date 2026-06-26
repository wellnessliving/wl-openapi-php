<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationDeleteRequest
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
     * `null` to use the system business .
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
