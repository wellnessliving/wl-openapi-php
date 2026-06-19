<?php
namespace WlSdk\Wl\Notification\Send;

/**
 * Response from GET
 */
class NotificationInfoApiGetResponse
{
    /**
     * Information about mail.
     *
     * @var array|null
     */
    public ?array $a_info = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? (array)$data['a_info'] : null;
    }
}
