<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastCDataUserProfile
{
    /**
     * User gender. One of {@link \WlSdk\Wl\Gender\GenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Gender\GenderSid
     */
    public ?int $id_gender = null;

    /**
     * User first name.
     *
     * @var string|null
     */
    public ?string $s_first_name = null;

    /**
     * User last name.
     *
     * @var string|null
     */
    public ?string $s_last_name = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL of the user's profile photo.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->s_first_name = isset($data['s_first_name']) ? (string)$data['s_first_name'] : null;
        $this->s_last_name = isset($data['s_last_name']) ? (string)$data['s_last_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
