<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationRetroactivePostRequest
{
    /**
     * Trigger settings.
     *
     * @var array|null
     */
    public ?array $a_step_trigger = null;

    /**
     * ID of the trigger of the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

    /**
     * Automation key.
     * `null` if the automation does not exist yet.
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
            'a_step_trigger' => $this->a_step_trigger,
            'id_trigger' => $this->id_trigger,
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
