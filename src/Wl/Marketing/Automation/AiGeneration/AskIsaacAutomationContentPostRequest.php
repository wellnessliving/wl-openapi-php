<?php

namespace WlSdk\Wl\Marketing\Automation\AiGeneration;

class AskIsaacAutomationContentPostRequest
{
    /**
     * Call to action data.
     *
     * @var array|null
     */
    public ?array $a_action = null;

    /**
     * List of automation steps.
     *
     * @var array|null
     */
    public ?array $a_step = null;

    /**
     * ID of the trigger of the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

    /**
     * Business key.
     * `null` to use the system business .
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Description of the automation.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Title of the automation.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_action' => $this->a_action,
            'a_step' => $this->a_step,
            'id_trigger' => $this->id_trigger,
            'k_business' => $this->k_business,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
