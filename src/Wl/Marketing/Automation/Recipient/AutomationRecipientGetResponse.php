<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

/**
 * Response from GET
 */
class AutomationRecipientGetResponse
{
    /**
     * Recipients data. Has the next structure:
     *
     * @var AutomationRecipientGetResponseRecipientList[]|null
     */
    public ?array $a_recipient_list = null;

    public function __construct(array $data)
    {
        $this->a_recipient_list = isset($data['a_recipient_list']) ? array_map(static fn ($item) => new AutomationRecipientGetResponseRecipientList((array)$item), (array)$data['a_recipient_list']) : null;
    }
}
