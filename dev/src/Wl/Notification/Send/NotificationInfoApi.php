<?php
namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Returns configuration information about the specified notification for the given business.
 */
class NotificationInfoApi
{
    /**
     * ID of the notification. See [RsMailSid](#/components/schemas/RsMailSid).
     *
     * @var int|null
     */
    public ?int $id_notification = null;

    /**
     * Key of the business where information about notification should be retrieved.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return NotificationInfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): NotificationInfoApiGetResponse
    {
        return new NotificationInfoApiGetResponse($this->client->request('/Wl/Notification/Send/NotificationInfo.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_notification' => $this->id_notification,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
