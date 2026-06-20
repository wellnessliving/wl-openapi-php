<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastM
{
    /**
     * List of email domain tokens:
     *
     * Empty array if the business does not have a mail domain set up.
     *
     * @var SubscribePostResponseMessageBroadcastMDomainToken|null
     */
    public ?SubscribePostResponseMessageBroadcastMDomainToken $a_domain_token = null;

    /**
     * Email domain status.
     *
     * `null` if the business does not have a mail domain set up.
     *
     * @var int|null
     */
    public ?int $id_domain_status = null;

    /**
     * CSS class for the icon representing the email domain status.
     *
     * Empty string if the business does not have a mail domain set up.
     *
     * @var string|null
     */
    public ?string $text_domain_status_icon = null;

    public function __construct(array $data)
    {
        $this->a_domain_token = isset($data['a_domain_token']) ? new SubscribePostResponseMessageBroadcastMDomainToken((array)$data['a_domain_token']) : null;
        $this->id_domain_status = isset($data['id_domain_status']) ? (int)$data['id_domain_status'] : null;
        $this->text_domain_status_icon = isset($data['text_domain_status_icon']) ? (string)$data['text_domain_status_icon'] : null;
    }
}
