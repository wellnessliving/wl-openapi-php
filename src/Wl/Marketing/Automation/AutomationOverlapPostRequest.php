<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationOverlapPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of automations that use the same trigger. Each element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_automation_list = null;

    /**
     * List of system notification mails that semantically overlap with the automation trigger.
     * Each element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_notification_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_automation_list' => $this->a_automation_list,
            'a_notification_list' => $this->a_notification_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
