<?php

namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Schedules or immediately sends a notification to clients of the specified business or location.
 */
class NotificationSend
{
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
     * @return NotificationSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NotificationSendPostRequest $request): NotificationSendPostResponse
    {
        return new NotificationSendPostResponse($this->client->request('/Wl/Notification/Send/NotificationSend.json', $request->params(), 'POST'));
    }
}
