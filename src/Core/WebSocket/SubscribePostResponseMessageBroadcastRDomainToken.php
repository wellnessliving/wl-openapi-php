<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastRDomainToken
{
    /**
     * Status of the token. One of
     * [DomainVerifyStatusSid](#/components/schemas/Wl.Mail.Domain.DomainVerifyStatusSid) constants.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * Host part of the token, which should be added to the DNS records.
     *
     * @var string|null
     */
    public ?string $text_host = null;

    /**
     * CSS class for the icon representing the token status.
     *
     * @var string|null
     */
    public ?string $text_icon_class = null;

    /**
     * Text representation of the token status.
     *
     * @var string|null
     */
    public ?string $text_status = null;

    /**
     * Type of the token. One of [DomainTokenTypeSid](#/components/schemas/Wl.Mail.Domain.DomainTokenTypeSid)
     * constants in text representation.
     *
     * @var string|null
     */
    public ?string $text_type = null;

    /**
     * Value of the token, which should be added to the DNS records.
     *
     * @var string|null
     */
    public ?string $text_value = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->text_host = isset($data['text_host']) ? (string)$data['text_host'] : null;
        $this->text_icon_class = isset($data['text_icon_class']) ? (string)$data['text_icon_class'] : null;
        $this->text_status = isset($data['text_status']) ? (string)$data['text_status'] : null;
        $this->text_type = isset($data['text_type']) ? (string)$data['text_type'] : null;
        $this->text_value = isset($data['text_value']) ? (string)$data['text_value'] : null;
    }
}
