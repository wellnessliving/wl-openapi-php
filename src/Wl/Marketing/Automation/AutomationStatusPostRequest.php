<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationStatusPostRequest
{
    /**
     * `true` if automation is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
     * `null` to use the system business (prebuilt automation has `null` business key).
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_active' => $this->is_active,
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
