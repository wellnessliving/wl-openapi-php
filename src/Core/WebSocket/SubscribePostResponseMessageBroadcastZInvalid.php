<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastZInvalid
{
    /**
     * Address information.
     *
     * @var SubscribePostResponseMessageBroadcastZInvalidAddress|null
     */
    public ?SubscribePostResponseMessageBroadcastZInvalidAddress $a_address = null;

    /**
     * Whether address string is specified.
     *
     * @var bool|null
     */
    public ?bool $is_address = null;

    /**
     * `true` if address check, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_checked = null;

    /**
     * User email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * User name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Note.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to user profile.
     *
     * @var string|null
     */
    public ?string $url = null;

    /**
     * Link to user image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_address = isset($data['a_address']) ? new SubscribePostResponseMessageBroadcastZInvalidAddress((array)$data['a_address']) : null;
        $this->is_address = isset($data['is_address']) ? (bool)$data['is_address'] : null;
        $this->is_checked = isset($data['is_checked']) ? (bool)$data['is_checked'] : null;
        $this->text_email = isset($data['text_email']) ? (string)$data['text_email'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
