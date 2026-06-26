<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationPostRequest
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

    /**
     * Call to action data.
     *
     * @var array|null
     */
    public ?array $a_action = null;

    /**
     * List of service types connected to pre-built automations.
     *
     * @var int[]|null
     */
    public ?array $a_action_service_type = null;

    /**
     * List of business types connected to pre-built automations.
     *
     * @var array|null
     */
    public ?array $a_business_type = null;

    /**
     * List of automation steps.
     *
     * @var array|null
     */
    public ?array $a_step = null;

    /**
     * ID of the call to action in the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\CallToAction\AutomationActionSid
     */
    public ?int $id_action = null;

    /**
     * ID of the label of the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\AutomationLabelSid
     */
    public ?int $id_label = null;

    /**
     * ID of the trigger of the automation.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

    /**
     * Whether the automation is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether to save automation as draft.
     * `null` has different meanings for creation vs update:
     *  - On create: derive draft state from `is_active`.
     *  - On update: keep the current `is_draft` value in the database (do not change it).
     *
     * @var bool|null
     */
    public ?bool $is_draft = null;

    /**
     * Whether to use AI (ISAAC) for generating automation message templates.
     * This setting for prebuild only.
     *
     * @var bool|null
     */
    public ?bool $is_isaac_use = null;

    /**
     * Whether retroactive eligibility is enabled for the automation.
     * When `true`, clients who already meet the trigger condition at activation time
     * will be included in the automation audience.
     *
     * @var bool|null
     */
    public ?bool $is_retroactive = null;

    /**
     * Folder key. Only used when creating a new automation.
     * Ignored during editing - the folder is not changed.
     *
     * `null` to assign new automation to "Uncategorized" folder.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * Command for pre-built automation image save prepare.
     *
     * @var string|null
     */
    public ?string $s_image_command = null;

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
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            'a_action' => $this->a_action,
            'a_action_service_type' => $this->a_action_service_type,
            'a_business_type' => $this->a_business_type,
            'a_step' => $this->a_step,
            'id_action' => $this->id_action,
            'id_label' => $this->id_label,
            'id_trigger' => $this->id_trigger,
            'is_active' => $this->is_active,
            'is_draft' => $this->is_draft,
            'is_isaac_use' => $this->is_isaac_use,
            'is_retroactive' => $this->is_retroactive,
            'k_folder' => $this->k_folder,
            's_image_command' => $this->s_image_command,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
