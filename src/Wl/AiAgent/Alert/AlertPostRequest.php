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
     * CID of the alert to be fired.
     *
     * @var int|null
     * @see \WlSdk\Wl\AiAgent\Alert\AiAgentAlertAbstract
     */
    public ?int $cid_alert = null;

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
