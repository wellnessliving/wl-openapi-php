<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

class AutomationRecipientStatusPostRequest
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
     * Recipient user key.
     *
     * `null` if the request is filtered by a member group instead of an individual user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
