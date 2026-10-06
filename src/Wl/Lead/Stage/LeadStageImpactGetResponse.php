<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Response from GET
 */
class LeadStageImpactGetResponse
{
    /**
     * Automations the client is added to by the change.
     *
     * @var LeadStageImpactGetResponseAutomationStart[]|null
     */
    public ?array $a_automation_start = null;

    /**
     * Automations the client is removed from by the change.
     *
     * @var LeadStageImpactGetResponseAutomationStop[]|null
     */
    public ?array $a_automation_stop = null;

    /**
     * Type of the stage the client is moved into. One of {@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Stage\LeadStageTypeSid
     */
    public ?int $id_lead_stage_type = null;

    /**
     * Whether the change must be confirmed by the staff member.
     *
     * `true` if the change starts or stops an automation, or moves the client into a `Won` or `Lost` stage which
     * is counted by the Lead Management report. `false` if the change has no such effect and can be saved at once.
     *
     * @var bool|null
     */
    public ?bool $is_confirm = null;

    /**
     * First name of the client, or the full name if the client has no first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    public function __construct(array $data)
    {
        $this->a_automation_start = isset($data['a_automation_start']) ? array_map(static fn ($item) => new LeadStageImpactGetResponseAutomationStart((array)$item), (array)$data['a_automation_start']) : null;
        $this->a_automation_stop = isset($data['a_automation_stop']) ? array_map(static fn ($item) => new LeadStageImpactGetResponseAutomationStop((array)$item), (array)$data['a_automation_stop']) : null;
        $this->id_lead_stage_type = isset($data['id_lead_stage_type']) ? (int)$data['id_lead_stage_type'] : null;
        $this->is_confirm = isset($data['is_confirm']) ? (bool)$data['is_confirm'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
    }
}
