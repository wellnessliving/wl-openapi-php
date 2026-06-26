<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Remove\Trigger;

class RemoveDeleteRequest
{
    /**
     * Business key for which trigger/action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Identifier of the webhook in Zapier.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Webhook URL.
     *
     * @var string|null
     */
    public ?string $url_webhook = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_id' => $this->s_id,
            'url_webhook' => $this->url_webhook,
            ],
            static fn ($v) => $v !== null
        );
    }
}
