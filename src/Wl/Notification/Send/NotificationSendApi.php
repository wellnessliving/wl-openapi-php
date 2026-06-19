<?php
namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Schedules or immediately sends a notification to clients of the specified business or location.
 */
class NotificationSendApi
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
     * ID of the notification. See [RsMailSid](#/components/schemas/RsMailSid).
     * 
     * Contact with WellnessLiving support to get the list of available notifications.
     *
     * @var int|null
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Schedules or immediately sends a notification to clients of the specified business or location.
     *
     * Validates the business, optional location, and notification ID, then either dispatches the notification
     * immediately or schedules it at the UTC date and time provided in `$dtu_send` (must be within 7 days).
     * Optionally restricts recipients to specific UIDs via `$s_uid`. Requires the `rs.profile` privilege.
     *
     * @return NotificationSendApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): NotificationSendApiPostResponse
    {
        return new NotificationSendApiPostResponse($this->client->request('/Wl/Notification/Send/NotificationSend.json', $this->params(), 'POST'));
    }

    private function params(): array
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
            static fn($v) => $v !== null
        );
    }
}
