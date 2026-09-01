<?php

namespace WlSdk\Wl\AiAgent\Alert;

class AlertPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $cid_alert = null;

    /**
     * Conversation link assigned by the `AI Agent`.
     *
     * @var string|null
     */
    public ?string $url_conversation = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'cid_alert' => $this->cid_alert,
            'url_conversation' => $this->url_conversation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
