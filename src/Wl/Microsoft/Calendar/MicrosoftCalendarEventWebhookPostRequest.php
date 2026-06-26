<?php

namespace WlSdk\Wl\Microsoft\Calendar;

class MicrosoftCalendarEventWebhookPostRequest
{
    /**
     * The encoded validation token of the notification point.
     *
     * @var string|null
     */
    public ?string $s_token_validate = null;

    /**
     * Notification that comes from Microsoft.
     *
     * @var array|null
     */
    public ?array $a_notification = null;

    public function params(): array
    {
        return array_filter(
            [
            's_token_validate' => $this->s_token_validate,
            'a_notification' => $this->a_notification,
            ],
            static fn ($v) => $v !== null
        );
    }
}
