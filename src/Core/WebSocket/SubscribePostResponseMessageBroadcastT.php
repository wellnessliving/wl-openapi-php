<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastT
{
    /**
     * Card type ID.
     *
     * Not `null` when {@link \WlSdk\Core\WebSocket\ChannelBroadcast}
     * is equal {@link \WlSdk\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid}.
     *
     * @var int|null
     * @see \WlSdk\ACardSystemSid
     */
    public ?int $id_card_system = null;

    /**
     * Transaction exception ID.
     *
     * `null` if no errors occurred.
     *
     * @var int|null
     * @see \WlSdk\RsPayException
     */
    public ?int $id_pay_exception = null;

    /**
     * Ticket status.
     *
     * `null` if not set yet.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid
     */
    public ?int $id_ticket_status = null;

    /**
     * Amount of tips entered by customer on terminal.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * Cardholder name.
     *
     * Not `null` when {@link \WlSdk\Core\WebSocket\ChannelBroadcast}
     * is equal {@link \WlSdk\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid}.
     *
     * @var string|null
     */
    public ?string $s_card_holder = null;

    /**
     * Card expiration date.
     *
     * Not `null` when {@link \WlSdk\Core\WebSocket\ChannelBroadcast}
     * is equal {@link \WlSdk\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid}.
     *
     * @var string|null
     */
    public ?string $s_expire = null;

    /**
     * Last four digits of the card number.
     *
     * Not `null` when {@link \WlSdk\Core\WebSocket\ChannelBroadcast}
     * is equal {@link \WlSdk\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid}.
     *
     * @var string|null
     */
    public ?string $s_last4 = null;

    /**
     * Text message to notify the client.
     *
     * `null` until initialized.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->id_card_system = isset($data['id_card_system']) ? (int)$data['id_card_system'] : null;
        $this->id_pay_exception = isset($data['id_pay_exception']) ? (int)$data['id_pay_exception'] : null;
        $this->id_ticket_status = isset($data['id_ticket_status']) ? (int)$data['id_ticket_status'] : null;
        $this->m_tip = isset($data['m_tip']) ? (string)$data['m_tip'] : null;
        $this->s_card_holder = isset($data['s_card_holder']) ? (string)$data['s_card_holder'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_last4 = isset($data['s_last4']) ? (string)$data['s_last4'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
