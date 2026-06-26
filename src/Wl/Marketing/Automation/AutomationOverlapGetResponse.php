<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * Response from GET
 */
class AutomationOverlapGetResponse
{
    /**
     * List of automations that use the same trigger. Each element has the following structure:
     *
     * @var AutomationOverlapGetResponseAutomationList[]|null
     */
    public ?array $a_automation_list = null;

    /**
     * List of system notification mails that semantically overlap with the automation trigger.
     * Each element has the following structure:
     *
     * @var AutomationOverlapGetResponseNotificationList[]|null
     */
    public ?array $a_notification_list = null;

    public function __construct(array $data)
    {
        $this->a_automation_list = isset($data['a_automation_list']) ? array_map(static fn ($item) => new AutomationOverlapGetResponseAutomationList((array)$item), (array)$data['a_automation_list']) : null;
        $this->a_notification_list = isset($data['a_notification_list']) ? array_map(static fn ($item) => new AutomationOverlapGetResponseNotificationList((array)$item), (array)$data['a_notification_list']) : null;
    }
}
