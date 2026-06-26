<?php

namespace WlSdk\Wl\Alert;

class AlertListPostRequest
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of alert keys to mark as read.
     * `null` to set all alerts as read.
     *
     * @var string[]|null
     */
    public ?array $a_alert_read = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_alert_read' => $this->a_alert_read,
            ],
            static fn ($v) => $v !== null
        );
    }
}
