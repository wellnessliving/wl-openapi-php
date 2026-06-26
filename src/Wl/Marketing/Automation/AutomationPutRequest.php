<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationPutRequest
{
    /**
     * Whether to duplicate the automation.
     *
     * @var bool|null
     */
    public ?bool $is_duplicate = null;

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
            'is_duplicate' => $this->is_duplicate,
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
