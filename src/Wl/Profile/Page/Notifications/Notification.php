<?php

namespace WlSdk\Wl\Profile\Page\Notifications;

use WlSdk\WlSdkClient;

/**
 * Saves client's notifications settings.
 */
class Notification
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves client's notifications settings.
     *
     * @return NotificationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NotificationPostRequest $request): NotificationPostResponse
    {
        return new NotificationPostResponse($this->client->request('/Wl/Profile/Page/Notifications/Notification.json', $request->params(), 'POST'));
    }
}
