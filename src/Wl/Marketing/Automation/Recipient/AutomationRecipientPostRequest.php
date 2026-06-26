<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

class AutomationRecipientPostRequest
{
    /**
     * Automation key.
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

    /**
     * JSON-encoded list of user UIDs to add as recipients.
     *
     * @var string|null
     */
    public ?string $json_recipient_add = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            'json_recipient_add' => $this->json_recipient_add,
            ],
            static fn ($v) => $v !== null
        );
    }
}
