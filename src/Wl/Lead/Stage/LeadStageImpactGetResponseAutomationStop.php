<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageImpactGetResponseAutomationStop
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Description of the automation. Empty string if the automation has no description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Name of the stage the automation moves the client into when the client leaves it. Empty string when the
     * automation does not move clients anywhere, when the client is already in that stage after the change, or
     * when the move is backward and the automation does not allow it.
     *
     * @var string|null
     */
    public ?string $text_lead_stage_exit = null;

    /**
     * Name of the automation.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_automation = isset($data['k_automation']) ? (string)$data['k_automation'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_lead_stage_exit = isset($data['text_lead_stage_exit']) ? (string)$data['text_lead_stage_exit'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
