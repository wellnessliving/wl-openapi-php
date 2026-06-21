<?php

namespace WlSdk\Wl\Notification\Send;

class NotificationSendPostRequest
{
    /**
     * Custom array with information which can be used to generate notification.
     *
     * Use [NotificationInfoApi](/Wl/Notification/Send/NotificationInfo.json) for more information about available
     * fields.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Date and time in UTC, when notification should be sent. Empty string means to send immediately.
     *
     * If date and time are set, it should be reasonable. If it's too far in the future, API returns an error.
     *
     * @var string|null
     */
    public ?string $dtu_send = null;

    /**
     * ID of the notification. See {@link \WlSdk\RsMailSid}.
     *
     * Contact with WellnessLiving support to get the list of available notifications.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_notification = null;

    /**
     * Key of the business where notification should be sent.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location.
     * If it's not empty, only clients from this location will get notification.
     * `null` to not limit recipients with a certain location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * List of UIDs joined with comma, if notification should be sent to certain recipients.
     * Empty string means to send to all clients of the business or location with proper subscription level.
     *
     * @var string|null
     */
    public ?string $s_uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data' => $this->a_data,
            'dtu_send' => $this->dtu_send,
            'id_notification' => $this->id_notification,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_uid' => $this->s_uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
