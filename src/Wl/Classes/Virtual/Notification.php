<?php

namespace WlSdk\Wl\Classes\Virtual;

use WlSdk\WlSdkClient;

/**
 * Returns information about user that is currently signed in.
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
     * Returns information about user that is currently signed in.
     *
     * @return NotificationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NotificationGetRequest $request): NotificationGetResponse
    {
        return new NotificationGetResponse($this->client->request('/Wl/Classes/Virtual/Notification.json', $request->params(), 'GET'));
    }
}
