<?php
namespace WlSdk\Wl\Notification\Send;

class NotificationInfoGetRequest
{
    /**
     * ID of the notification. See {@link \WlSdk\RsMailSid}.
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

    public function params(): array
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
