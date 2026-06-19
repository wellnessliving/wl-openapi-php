<?php
namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Returns configuration information about the specified notification for the given business.
 */
class NotificationInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns configuration information about the specified notification for the given business.
     *
     * Validates the business key and notification ID, then returns the notification configuration including
     * mail template settings and channel availability for the given business. Requires the `rs.profile` privilege.
     *
     * @return NotificationInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NotificationInfoGetRequest $request): NotificationInfoGetResponse
    {
        return new NotificationInfoGetResponse($this->client->request('/Wl/Notification/Send/NotificationInfo.json', $request->params(), 'GET'));
    }
}
