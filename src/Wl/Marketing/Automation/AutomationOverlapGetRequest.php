<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationOverlapGetRequest
{
    /**
     * ID of the trigger of the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

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
            'id_trigger' => $this->id_trigger,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
